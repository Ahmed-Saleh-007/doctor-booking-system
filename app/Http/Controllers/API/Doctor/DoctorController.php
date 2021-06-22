<?php

namespace App\Http\Controllers\API\Doctor;

use App\Models\Doctor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;

class DoctorController extends Controller
{
    public function index()
    {
        
        $doctors = Doctor::with(['degree','specialist','subspecialists','addresses','country'])->with(['addresses.doctor_times','addresses.district','addresses.district.city'])->paginate(2);
        return $doctors;
        
    }

    function search($key)
    {
         $doctors = Doctor::where('name_en','like',"%$key%")->get();
         return $doctors;
    }
}
