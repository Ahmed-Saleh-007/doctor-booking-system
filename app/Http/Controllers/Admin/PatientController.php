<?php

namespace App\Http\Controllers\Admin;

use App\Models\Patient;
use App\DataTables\PatientDataTable;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Admin\StorePatientRequest;
use App\Http\Requests\Admin\UpdatePatientRequest;

class PatientController extends Controller
{
    public function index(PatientDataTable $patient)
    {
        return $patient->render('admin.patients.index', ['title' => 'Patients Control']);
    }

    public function store(StorePatientRequest $request)
    {
        $data = $request->all();
        $data['password'] = Hash::make($data['password']);
        $data['image'] = $request->hasFile('image') ? savePatientPhoto('images/patients', $request->image) : null;
        Patient::create($data);
        return response()->json(['success' => trans('admin.record_added')]);
    }

    public function show(Patient $patient)
    {
        return view('admin.patients.ajax.show', compact('patient'));
    }

    public function edit(Patient $patient)
    {
        return view('admin.patients.ajax.edit', compact('patient'));
    }

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
            $data['image'] = savePatientPhoto('images/patients/', $request->image);
        }
        $patient->update($data);
        return response()->json(['success' => trans('admin.updated_record')]);
    }

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
    
}//end of controller
