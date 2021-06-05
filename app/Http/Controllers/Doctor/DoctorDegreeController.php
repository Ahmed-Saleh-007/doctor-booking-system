<?php

namespace App\Http\Controllers\Doctor;

use App\DataTables\DoctorDegreeDatatable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreDoctorDegreeRequest;
use App\Http\Requests\Admin\UpdateDoctorDegreeRequest;
use App\Models\DoctorDegree;
use Illuminate\Http\Request;

class DoctorDegreeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(DoctorDegreeDatatable $doctorDegree)
    {
        return $doctorDegree->render('admin.doctor.doctor-degree.index', ['title' => 'Doctor Degree Control']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDoctorDegreeRequest $request)
    {
        $data = $request->all();
        DoctorDegree::create($data);
        return response()->json(['success' => trans('admin.record_added')]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $doctor_degree = DoctorDegree::find($id);

        if ($doctor_degree) {
            return view('admin.doctor.doctor-degree.ajax.show', ['doctor_degree'=>$doctor_degree]);
        } else {
            return redirect()->route('doctor-degree.index');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $doctor_degree = DoctorDegree::find($id);

        if ($doctor_degree) {
            return view('admin.doctor.doctor-degree.ajax.edit', ['doctor_degree'=>$doctor_degree]);
        } else {
            return redirect()->route('doctor-degree.index');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDoctorDegreeRequest $request, $id)
    {
        $doctor_degree = DoctorDegree::find($id);
        if ($doctor_degree) {
            $data = $request->all();
            $doctor_degree->update($data);
            return response()->json(['success' => trans('admin.updated_record')]);
        } else {
            return redirect()->route('doctor-degree.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $doctor_degree = DoctorDegree::find($id);
        if ($doctor_degree) {
            $doctor_degree->delete();
            return response()->json(['success' => trans('admin.deleted_record')]);
        } else {
            return redirect()->route('doctor-degree.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  null
     * @return json
     */
    public function destroyAll()
    {
        DoctorDegree::destroy(request('item'));
        return response()->json(['success' => trans('admin.deleted_record')]);
    }
}
