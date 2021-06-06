<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\DataTables\DoctorDatatable;
use App\Http\Requests\Admin\StoreDoctorRequest;
use App\Http\Requests\Admin\UpdateDoctorRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class DoctorController extends Controller
{
    //Show All Doctors Info
    public function index(DoctorDatatable $doctor)
    {
        return $doctor->render('admin.doctor.doctors.index', ['title' => 'Doctors Control']);
    }

    //Store A New Doctor Info
    public function store(StoreDoctorRequest $request)
    {
        $data = $request->all();
        $data['password'] = Hash::make($data['password']);
        $data['image'] = $request->hasFile('image') ? savePhoto('images/doctors/', $request->image) : null;
        Doctor::create($data);
        return response()->json(['success' => trans('admin.record_added')]);
    }

    //Show A Specified Doctor Info
    public function show(Doctor $doctor)
    {
        return view('admin.doctor.doctors.ajax.show', ['doctor' => $doctor,]);
    }

    //Show A Specified Doctor
    public function edit(Doctor $doctor)
    {
        return view('admin.doctor.doctors.ajax.edit', compact('doctor'));
    }

    //Update A Specified Doctor
    public function update(UpdateDoctorRequest $request, Doctor $doctor)
    {
        $data = $request->all();
        if ($request->filled('password')) {
            $data['password'] = Hash::make($data['password']);
        }else {
            $data['password'] = $doctor->password;
        }
        if ($request->hasFile('image')) {
            if (!empty($doctor->image)) {
                Storage::delete($doctor->image);
            }
            $data['image'] = savePhoto('images/doctors/', $request->image);
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