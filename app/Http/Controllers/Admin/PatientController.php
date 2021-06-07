<?php

namespace App\Http\Controllers\Admin;

use App\Models\Patient;
use Illuminate\Http\Request;
use App\DataTables\PatientDataTable;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Admin\StorePatientRequest;
use App\Http\Requests\Admin\UpdatePatientRequest;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(PatientDataTable $patient)
    {
        return $patient->render('admin.patients.index', ['title' => 'Patients Control']);
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
    public function store(StorePatientRequest $request)
    {
        //dd($request);
        $data = $request->all();
        $data['password'] = Hash::make($data['password']);
        $data['image'] = $request->hasFile('image') ? savePhoto('images/patients/', $request->image) : null;
        Patient::create($data);
        return response()->json(['success' => trans('admin.record_added')]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Patient $patient)
    {
        return view('admin.patients.ajax.show', compact('patient'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Patient $patient)
    {
        return view('admin.patients.ajax.edit', compact('patient'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePatientRequest $request, Patient $patient)
    {
        $data = $request->all();
        if ($request->filled('password')) {
            $data['password'] = Hash::make($data['password']);
        }else {
            $data['password'] = $patient->password;
        }
        if ($request->hasFile('image')) {
            if (!empty($patient->image)) {
                Storage::delete($patient->image);
            }
            $data['image'] = savePhoto('images/admins/', $request->image);
        }
        $patient->update($data);
        return response()->json(['success' => trans('admin.updated_record')]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patient $patient)
    {
        !empty($patient->image) ? Storage::delete($patient->image) : '';
        $patient->delete();
        return response()->json(['success' => trans('admin.deleted_record')]);
    }

    public function destroyAll()
    {
        foreach (request('item') as $id) {
            $patient = Patient::find($id);
            !empty($patient->image) ? Storage::delete($patient->image) : '';
        }
        Patient::destroy(request('item'));
		return response()->json(['success' => trans('admin.deleted_record')]);
    }

    // public function register(Request $req)
    // {

    //     $patient = new Patient;
    //     $patient->name_en = $req->input('name_en');
    //     $patient->email = $req->input('email');
    //     $patient->password = Hash::make($req->input('password'));
    //     $patient->mobile = $req->input('mobile');
    //     $patient->date_of_birth = $req->input('date_of_birth');
    //     $patient->gender = $req->input('gender');
    //     $patient->save();
    //     return $patient;

    // }

}
