<?php

namespace App\Http\Controllers\Doctor;

use App\Models\DoctorTime;
use App\Http\Controllers\Controller;
use App\DataTables\DoctorTimeDatatable;
use App\Http\Requests\Admin\StoreDoctorTimeRequest;
use App\Http\Requests\Admin\UpdateDoctorTimeRequest;

class DoctorTimeController extends Controller
{
    public function index(DoctorTimeDatatable $doctor_time)
    {

        return $doctor_time->with([
            'level'     => 'doctor',
            'doctor_id' => request('doctor_id'),
            'doctor_address_id' => request('doctor_address_id')
            ])
        ->render('doctor.doctor_times.index',
        ['title' => 'DoctorTime Control']);
    }

    public function store(StoreDoctorTimeRequest $request)
    {
        $data = $request->all();
        DoctorTime::create($data);
        return response()->json(['success' => trans('admin.record_added')]);
    }

    public function show($id)
    {
        $doctor_time = DoctorTime::find($id);
        return view('doctor.doctor_times.ajax.show', compact('doctor_time'));
    }


    public function edit($id)
    {
        $doctor_time = DoctorTime::find($id);
        return view('doctor.doctor_times.ajax.edit', compact('doctor_time'));
    }

    public function update(UpdateDoctorTimeRequest $request, DoctorTime $doctor_time)
    {
        $data = $request->all();
        $doctor_time->update($data);
        return response()->json(['success' => trans('admin.updated_record')]);
    }

    public function destroy($id)
    {
        $doctor_time = DoctorTime::find($id);
        $doctor_time->delete();
        return response()->json(['success' => trans('admin.deleted_record')]);
    }

    public function destroyAll()
    {
        DoctorTime::destroy(request('item'));
        return response()->json(['success' => trans('admin.deleted_record')]);
    }

}
