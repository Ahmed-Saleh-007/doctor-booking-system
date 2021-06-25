<?php

namespace App\Http\Controllers\API\Doctor;
use App\Models\DoctorTime;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreDoctorTimeRequest;
use App\Http\Requests\Admin\UpdateDoctorTimeRequest;
use Facade\FlareClient\Http\Response;

class DoctorTimeController extends Controller
{
    public function index($doctor_id, $address_id)
    {
        $doctor_times = DoctorTime::where('doctor_id', $doctor_id)->with('doctor_address')->get();
        return $doctor_times;
    }

    public function store(StoreDoctorTimeRequest $request)
    {
        $data = $request->all();
        DoctorTime::create($data);
        return response()->json([
            "message" => "Reservation successfully",
            "statusCode" => 201,
            "statusMsg" => "Created",
        ]);    
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
