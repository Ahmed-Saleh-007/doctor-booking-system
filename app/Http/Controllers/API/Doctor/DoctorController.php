<?php

namespace App\Http\Controllers\API\Doctor;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Doctor;
use App\Models\DoctorAddress;
use App\Models\Specialist;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DoctorController extends Controller
{
    public function index()
    {
        $doctors = Doctor::with(['degree','specialist','subspecialists','addresses','country'])->with(['addresses.doctor_times','addresses.district','addresses.district.city'])->paginate(2);
        // return $doctors[0]->id;

        $rates = [];
        foreach ($doctors as $doctor){
            $rates[$doctor->id] = $doctor->totalRate();
        }
        // return $rates;
        return array_merge($doctors, $rates);
        return $doctors;
        
    }

    public function search(Request $request)
    {
        $doctorDistrictIDs=null;
        $d=null;
        $doctor=null;

        if (isset($request->district)) {
            $doctorDistrictIDs = DoctorAddress::select('doctor_id')->where('district_id', $request->district)->get();
        }

        if (isset($doctorDistrictIDs)) {
            $d = Doctor::with(['degree','specialist','subspecialists','addresses','country'])
            ->with(['addresses.doctor_times','addresses.district','addresses.district.city'])
            ->whereIn('id', $doctorDistrictIDs);
            $doctor = $d;
        }

        if (isset($request->name)) {
            if (isset($d)) {
                $doctor = $d->
            where('name_en', $request->name)
            ->with(['degree','specialist','subspecialists','addresses','country'])
            ->with(['addresses.doctor_times','addresses.district','addresses.district.city']);
            } else {
                $doctor = Doctor::with(['degree','specialist','subspecialists','addresses','country'])
                ->with(['addresses.doctor_times','addresses.district','addresses.district.city'])
                ->where('name_en', $request->name);
            }
        }
        if (isset($request->specialty)) {
            if (isset($d)) {
                $doctor = $d->
            where('spec_id', $request->specialty)
            ->with(['degree','specialist','subspecialists','addresses','country'])
            ->with(['addresses.doctor_times','addresses.district','addresses.district.city']);
            } else {
                $doctor = Doctor::with(['degree','specialist','subspecialists','addresses','country'])
                ->with(['addresses.doctor_times','addresses.district','addresses.district.city'])
                ->where('spec_id', $request->specialty);
            }
        }

        if (isset($doctor)) {
            $result = $doctor->paginate(5);
        } else {
            $result = ["response"=>"no Data"];
        }

        return $result;
    }
}
