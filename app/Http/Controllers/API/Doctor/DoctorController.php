<?php

namespace App\Http\Controllers\API\Doctor;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Doctor;
use App\Models\DoctorAddress;
use App\Models\Specialist;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index()
    {
        $doctors = Doctor::paginate(2);
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
            $d = Doctor::with(['degree','specialist','subspecialists','addresses','country'])->with(['addresses.doctor_times','addresses.district','addresses.district.city'])
            ->whereIn('id', $doctorDistrictIDs)->get();
            $doctor = $d;
            dd($d);
        }

        if (isset($request->specialty)) {
            $doctor =  Doctor::
            where('spec_id', $request->specialty)->pluck('id', 'name_en')
            ->with(['degree','specialist','subspecialists','addresses','country'])->with(['addresses.doctor_times','addresses.district','addresses.district.city'])->toArray();
            if (!isset($d)) {
                $d = $doctor;
            }
        }

        // if (isset($doctor) && isset($d)) {
        //     $result = array_intersect($d, $doctor);
        // } else {
        //     $result = "No data";
        // }

        return $d ;
    }
}
