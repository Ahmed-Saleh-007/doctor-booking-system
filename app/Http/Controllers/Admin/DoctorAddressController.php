<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\DoctorAddressesDatatable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Doctor\StoreDoctorAddressesRequest;
use App\Models\City;
use App\Models\Country;
use App\Models\Doctor;
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
        //dd($doctorAddresses);
        // return "t";
        return $doctorAddresses->render('admin.doctor.doctor-addresses.index', ['title' => 'Doctor Addresses Control']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Doctor $doctor)
    {
        $countries = Country::latest()->get();
        return view('admin.doctor-addresses.create', compact('doctor', 'countries'));
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
        return redirect()->route('doctors.show', $doctor->id);
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
    public function edit(DoctorAddress $address)
    {
        $countries = Country::latest()->get();
        return view('admin.doctor-addresses.edit', compact('address', 'countries'));
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
        return redirect()->route('doctors.show', $address->doctor_id);
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
        return redirect()->route('doctors.show', $address->doctor_id);
    }

    //used in DoctorController in the create method
    public static function saveDoctorAddress($doctorId, $addressEn, $addressAr, $cityId, $districtId, $longitude, $latitude, $fees)
    {
        # code...
        DoctorAddress::create([
             'address_ar'    => $addressAr,
             'address_en'    => $addressEn,
             'doctor_id'     => $doctorId,
             'city_id'       => $cityId,
             'district_id'   => $districtId,
             'longitude'     => $longitude,
             'latitude'      => $latitude,
             'fees'          => $fees,
         ]);
    }
}
