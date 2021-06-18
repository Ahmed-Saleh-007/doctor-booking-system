<?php

namespace App\Http\Controllers\Doctor;

use App\DataTables\DoctorAddressesDatatable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreDoctorAddressesRequest;
use App\Models\City;
use App\Models\Country;
use App\Models\Doctor;
use App\Models\DoctorAddress;
use Illuminate\Http\Request;

class DoctorAddressController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Doctor $doctor)
    {
        $countries = Country::latest()->get();
        return view('doctor.doctor-addresses.create', compact('doctor', 'countries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDoctorAddressesRequest $request, Doctor $doctor)
    {
        $data = $request->all();
        $data['doctor_id'] = $doctor->id;
        DoctorAddress::Create($data);
        session()->flash('success', trans('admin.record_added'));
        return redirect()->route('doctor.profile', $doctor->id);
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
            return view('doctor.doctor-addresses.ajax.show', ['doctor_address'=>$doctor_address]);
        } else {
            return redirect()->route('doctor.doctor-address.index');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(DoctorAddress $address)
    {
        $countries = Country::latest()->get();
        return view('doctor.doctor-addresses.edit', compact('address', 'countries'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreDoctorAddressesRequest $request, DoctorAddress $address)
    {
        $address->update($request->all());

        session()->flash('success', trans('admin.updated_record'));
        return redirect()->route('doctor.profile', $address->doctor_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(DoctorAddress $address)
    {
        $address->delete();
        return redirect()->route('doctor.profile', $address->doctor_id);
    }

    //used in DoctorController in the create method
    public static function saveDoctorAddress(Request $doctor_address, $doctor_id)
    {
        $validated = $doctor_address->validate([
            'address_en'  => 'required',
            'address_ar'  => 'required',
            'district_id'  => 'required',
            'fees'    => 'required|numeric|gt:0',
        ]);
        // dd($validated);
        # code...
        DoctorAddress::create([
            'address_ar'    => $doctor_address['address_ar'],
            'address_en'    => $doctor_address['address_en'],
            'doctor_id'     => $doctor_id,
            'district_id'   => $doctor_address['district_id'],
            'longitude'     => $doctor_address['longitude'],
            'latitude'      => $doctor_address['latitude'],
            'fees'          => $doctor_address['fees'],
         ]);
    }
}
