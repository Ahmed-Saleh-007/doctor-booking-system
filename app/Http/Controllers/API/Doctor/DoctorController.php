<?php

namespace App\Http\Controllers\API\Doctor;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index()
    {
        
        $doctors = Doctor::with(['degree','specialist','addresses','country'])->paginate(2);
        return $doctors;
    }

    function search($key)
    {
         $doctors = Doctor::where('name_en','like',"%$key%")->get();
         return $doctors;
    }
}
