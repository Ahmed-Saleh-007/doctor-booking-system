<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UpdateDoctorRequest;
use App\Models\Doctor;
use App\Models\SubSpecialist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;


class DoctorController extends Controller
{
    public function show()
    {
    	$doctor = Doctor::findOrFail(doctor()->id());
    	return view('doctor.doctor.show',compact('doctor'));
    }

    public function edit()
    {
    	$doctor = Doctor::findOrFail(doctor()->id());
    	return view('doctor.doctor.edit',compact('doctor'));
    }

    public function update(UpdateDoctorRequest $request, Doctor $doctor)
    {
        $data = $request->all();

        if ($doctor->spec_id != $request->spec_id) {
           $doctor->subspecialists()->wherePivot('doc_id', '=', $doctor->id)->detach();
        }

        if ($request->filled('password')) {
            $data['password'] = Hash::make($data['password']);
        } else {
            $data['password'] = $doctor->password;
        }

        if ($request->hasFile('image')) {
            if (!empty($doctor->image)) {
                Storage::delete($doctor->image);
            }
            $data['image'] = savePhoto('images/doctors/', $request->image);
        }
        $doctor->subspecialists()->sync($data['subspec_id']);
        $doctor->update($data);
        session()->flash('success', trans('admin.updated_record'));
        return redirect()->route('doctor.profile');
    }

}
