<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\DoctorAddressesDatatable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Doctor\StoreDoctorAddressesRequest;
use App\Models\DoctorAddress;
use Illuminate\Http\Request;

class DoctorAddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(DoctorAddressesDatatable $doctorAddresses)
    {
        return $doctorAddresses->render('admin.doctor.doctor-addresses.index', ['title' => 'Doctor Addresses Control']);
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
    public function store(StoreDoctorAddressesRequest $request)
    {
        $data = $request->all();
        DoctorAddress::create($data);
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
        $doctor_address = DoctorAddress::find($id);

        if ($doctor_address) {
            return view('admin.doctor.doctor-addresses.ajax.show', ['doctor_address'=>$doctor_address]);
        } else {
            return redirect()->route('doctor-address.index');
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
        $doctor_address = DoctorAddress::find($id);

        if ($doctor_address) {
            return view('admin.doctor.doctor-addresses.ajax.edit', ['doctor_address'=>$doctor_address]);
        } else {
            return redirect()->route('doctor-address.index');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreDoctorAddressesRequest $request, $id)
    {
        $doctor_address = DoctorAddress::find($id);
        if ($doctor_address) {
            $data = $request->all();
            $doctor_address->update($data);
            return response()->json(['success' => trans('admin.updated_record')]);
        } else {
            return redirect()->route('doctor-addresses.index');
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
        $doctor_address = DoctorAddress::find($id);
        if ($doctor_address) {
            $doctor_address->delete();
            return response()->json(['success' => trans('admin.deleted_record')]);
        } else {
            return redirect()->route('doctor-address.index');
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
        DoctorAddress::destroy(request('item'));
        return response()->json(['success' => trans('admin.deleted_record')]);
    }
}
