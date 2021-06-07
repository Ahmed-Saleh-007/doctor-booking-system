<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\DataTables\DoctorDatatable;
use App\Http\Requests\Doctor\StoreDoctorRequest;
use App\Http\Requests\Doctor\UpdateDoctorRequest;
use App\Models\City;
use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class DoctorController extends Controller
{
    //Show All Doctors Info
    public function index(DoctorDatatable $doctor)
    {
        return $doctor->render('admin.doctor.index', ['title' => 'Doctors Control']);
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        //

        $countries = Country::latest()->get();

        return view('admin.doctor.create', compact('countries'));
    }

    //Store A New Doctor Info
    public function store(StoreDoctorRequest $request)
    {
        $data = $request->all();
        $data['password'] = Hash::make($data['password']);

        if ($request->image) {
            $data['image'] = savePhoto('image', 'doctors', $request);
        }

        $doctor = Doctor::create($data);

        //insert the address if exist
        if (($request->filled('address_en')) || ($request->filled('address_ar'))) {
            DoctorAddressController::saveDoctorAddress($doctor->id, request('address_en'), request('address_ar'), request('city_id'), request('district_id'), request('longitude'), request('latitude'), request('address_fees'));
        }

        session()->flash('success', trans('admin.record_added'));
        return redirect()->route('doctors.index');
    }

    //Show A Specified Doctor Info
    public function show(Doctor $doctor)
    {
        return view('admin.doctor.show', compact('doctor'));
    }

    //Show A Specified Doctor
    public function edit(Doctor $doctor)
    {
        return view('admin.doctor.edit', compact('doctor'));
    }

    //Update A Specified Doctor
    public function update(UpdateDoctorRequest $request, Doctor $doctor)
    {
        $data = $request->all();

        if ($request->filled('password')) {
            $data['password'] = Hash::make($data['password']);
        } else {
            $data['password'] = $doctor->password;
        }

        if ($request->file('image')) {
            $data['image']  = savePhoto('image', 'doctors', $request);//new image

            Storage::delete('images/'.$doctor->image);//delete the old image
        }

        $doctor->update($data);
        session()->flash('success', trans('admin.updated_record'));
        return redirect()->route('doctors.index');
    }

    //Remove A Specified Doctor
    public function destroy(Doctor $doctor)
    {
        !empty($doctor->image) ? Storage::delete($doctor->image) : '';
        $doctor->delete();
        return response()->json(['success' => trans('admin.deleted_record')]);
    }

    //Destroy All Doctors
    public function destroyAll()
    {
        foreach (request('item') as $id) {
            $doctor = Doctor::find($id);
            !empty($doctor->image) ? Storage::delete($doctor->image) : '';
        }
        Doctor::destroy(request('item'));
        return response()->json(['success' => trans('admin.deleted_record')]);
    }
}
