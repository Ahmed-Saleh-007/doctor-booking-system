<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\DataTables\DoctorDatatable;
use App\Http\Requests\Admin\StoreDoctorAddressesRequest;
use App\Http\Requests\Admin\StoreDoctorRequest;
use App\Models\City;
use App\Models\Country;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\UpdateDoctorRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Auth;

class DoctorController extends Controller
{
    //Show All Doctors Info
    public function index(DoctorDatatable $doctor)
    {
        return $doctor->render('admin.doctor.index', ['title' => trans('admin.doctor')]);
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        $countries = Country::latest()->get();
        return view('admin.doctor.create', compact('countries'));
    }

    //Store A New Doctor Info
    public function store(StoreDoctorRequest $request)
    {
        if (($request->filled('address_en')) || ($request->filled('address_ar'))) {
            $request->validate([
                'address_en'  => 'required',
                'address_ar'  => 'required',
                'district_id' => 'required',
                'fees'        => 'required|numeric|gt:0',
            ]);
        }
        $data = $request->all();
        $data['password'] = Hash::make($data['password']);
        $data['image'] = $request->hasFile('image') ? savePhoto('images/doctors/', $request->image) : null;

        $isFound = Doctor::find(request('email'));

        if (!$isFound) {
            $doctor = Doctor::create($data);
        }

        //insert the address if exist
        if (($request->filled('address_en')) || ($request->filled('address_ar'))) {
            $doctorAddress = [
                'doctor_id'  => $doctor->id,
                'address_en' => request('address_en'),
                'address_ar' => request('address_ar'),
                'city_id'    => request('city_id'),
                'district_id'=> request('district_id'),
                'longitude'  => request('longitude'),
                'latitude'    => request('latitude'),
                'fees' => request('address_fees'),
            ];
            DoctorAddressController::saveDoctorAddress($request, $doctor->id);
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
        Storage::delete('images/'.$doctor->image);
        $doctor->delete();
        session()->flash('success', trans('admin.deleted_record'));
        return redirect()->route('doctors.index');
    }

    //Destroy All Doctors
    public function destroyAll()
    {
        foreach (request('item') as $id) {
            $admin = Doctor::find($id);
            Storage::delete('images/'.$admin->image);
        }
        Doctor::destroy(request('item'));
        session()->flash('success', trans('admin.deleted_record'));
        return redirect()->route('doctors.index');
    }
}
