<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\DataTables\DoctorDatatable;
// use App\Http\Requests\Doctor\StoreDoctorRequest;
// use App\Http\Requests\Doctor\UpdateDoctorRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class DoctorController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(DoctorDatatable $admin)
    {
        return $doctor->render('admin.doctor.doctors.index', ['title' => 'Doctors Control']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDoctorRequest $request)
    {
        $data = $request->all();
        $data['password'] = Hash::make($data['password']);
        $data['image'] = $request->hasFile('image') ? savePhoto('images/admins/', $request->image) : null;
        Doctor::create($data);
        return response()->json(['success' => trans('admin.record_added')]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Doctor $doctor)
    {
        return view('admin.doctor.doctors.ajax.show', compact('admin'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Doctor $doctor)
    {
        return view('admin.doctor.doctors.ajax.edit', compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDoctorRequest $request, Admin $admin)
    {

        $data = $request->all();
        if ($request->filled('password')) {
            $data['password'] = Hash::make($data['password']);
        }else {
            $data['password'] = $admin->password;
        }
        if ($request->hasFile('image')) {
            if (!empty($admin->image)) {
                Storage::delete($admin->image);
            }
            $data['image'] = savePhoto('images/admins/', $request->image);
        }
        $admin->update($data);
        return response()->json(['success' => trans('admin.updated_record')]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doctor $doctor)
    {
        !empty($doctor->image) ? Storage::delete($doctor->image) : '';
        $doctor->delete();
        return response()->json(['success' => trans('admin.deleted_record')]);
    }

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