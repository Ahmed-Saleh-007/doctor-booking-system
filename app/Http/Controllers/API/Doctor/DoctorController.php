<?php

namespace App\Http\Controllers\API\Doctor;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\District;
use App\Models\Doctor;
use App\Models\DoctorAddress;
use App\Models\Specialist;
use App\Models\SubSpecialist;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DoctorController extends Controller
{
    public function index()
    {
        $doctors = Doctor::with(['degree','specialist','subspecialists','addresses','country'])->with(['addresses.doctor_times','addresses.district','addresses.district.city'])->paginate(2);

        return $doctors;
    }

    public function search(Request $request)
    {
        $result = $this->handelSearch($request);
        return $result->paginate(5);
    }

    public function filter(Request $request)
    {
        $subDepartmentIDs = null;
        $subDepartmentDocIDs = array();
        $result = $this->handelSearch($request);


        if (isset($request->sub_department) && $request->sub_department !== 'null') {
            // $subDepartmentDocIDs = 0;
            $subDepartmentIDs = SubSpecialist::where('id', $request->sub_department);
            $subDepartmentIDs=$subDepartmentIDs->with('doctors')->get();
            $subDepartmentIDs = $subDepartmentIDs->pluck('doctors')->collapse()->toArray();

            // $subDepartmentIDs = $subDepartmentIDs->detach('id')->collapse();
            if (count($subDepartmentIDs) > 0) {
                foreach ($subDepartmentIDs as $value) {
                    $subDepartmentDocIDs[]=$value['id'];
                }
            } else {
                $subDepartmentDocIDs[] = 0;
            }
        }


        if (count($subDepartmentDocIDs)>0) {
            $result -> whereIn('id', $subDepartmentDocIDs)
            ->with(['degree','specialist','subspecialists','addresses','country'])
            ->with(['addresses.doctor_times','addresses.district','addresses.district.city']);
        }



        if (isset($request->gender) && $request->gender !== 'null') {
            $result -> where('gender', $request->gender)
            ->with(['degree','specialist','subspecialists','addresses','country'])
            ->with(['addresses.doctor_times','addresses.district','addresses.district.city']);
        }

        if (isset($request->degree)  && $request->degree !== 'null') {
            // dd($request->degree);
            $result -> where('deg_id', $request->degree)
            ->with(['degree','specialist','subspecialists','addresses','country'])
            ->with(['addresses.doctor_times','addresses.district','addresses.district.city']);
        }



        return $result->paginate(5);
    }

    private function handelSearch(Request $request)
    {
        $doctorDistrictIDs=null;
        $doctorCityIDs=null;
        $d=null;
        $doctor=null;

        if (isset($request->city) && $request->city!=='null') {
            $districtIDs = District::select('id')->where('city_id', $request->city)->get();
            $doctorDistrictIDs = DoctorAddress::select('doctor_id')->whereIn('district_id', $districtIDs)->get();
        }

        if (isset($request->district) && $request->district!=='null') {
            $doctorDistrictIDs = DoctorAddress::select('doctor_id')->where('district_id', $request->district)->get();
        }

        if (isset($doctorDistrictIDs)) {
            $d = Doctor::with(['degree','specialist','subspecialists','addresses','country'])
            ->with(['addresses.doctor_times','addresses.district','addresses.district.city'])
            ->whereIn('id', $doctorDistrictIDs);
            $doctor = $d;
        }

        if (isset($request->name) && $request->name!=='null') {
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
        if (isset($request->specialty) && $request->specialty!=='null') {
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
            $result = $doctor;
        } else {
            $result = Doctor::with(['degree','specialist','subspecialists','addresses','country'])
            ->with(['addresses.doctor_times','addresses.district','addresses.district.city']);
        }
        return $result;
    }
}
