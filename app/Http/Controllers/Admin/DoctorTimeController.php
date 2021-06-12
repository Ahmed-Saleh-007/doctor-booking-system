<?php

namespace App\Http\Controllers\Admin;

use App\Models\DoctorTime;
use App\Http\Controllers\Controller;
use App\DataTables\DoctorTimeDatatable;
use App\Http\Requests\Admin\StoreDoctorTimeRequest;
use App\Http\Requests\Admin\UpdateDoctorTimeRequest;

class DoctorTimeController extends Controller
{
    public function index(DoctorTimeDatatable $doctor_time)
    {
        return $doctor_time->render('admin.doctor_times.index', ['title' => 'DoctorTime Control']);
    }

    public function store(StoreDoctorTimeRequest $request)
    {
        $data = $request->all();
        DoctorTime::create($data);
        return response()->json(['success' => trans('admin.record_added')]);
    }

    public function show(DoctorTime $doctor_time)
    {
        return view('admin.doctor_times.ajax.show', compact('doctor_time'));
    }


    public function edit(DoctorTime $doctor_time)
    {
        return view('admin.doctor_times.ajax.edit', compact('doctor_time'));
    }

    public function update(UpdateDoctorTimeRequest $request, DoctorTime $doctor_time)
    {
        $data = $request->all();
        $doctor_time->update($data);
        return response()->json(['success' => trans('admin.updated_record')]);
    }

    public function destroy(DoctorTime $doctor_time)
    {
        $doctor_time->delete();
        return response()->json(['success' => trans('admin.deleted_record')]);
    }

    public function destroyAll()
    {
        DoctorTime::destroy(request('item'));
        return response()->json(['success' => trans('admin.deleted_record')]);
    }

}
