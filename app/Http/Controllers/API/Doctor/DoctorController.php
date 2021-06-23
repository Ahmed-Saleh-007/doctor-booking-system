<?php

namespace App\Http\Controllers\API\Doctor;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use Illuminate\Http\Request;

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

    function search($key)
    {
         $doctors = Doctor::where('name_en','like',"%$key%")->get();
         return $doctors;
    }
}
