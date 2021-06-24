<?php

namespace App\Http\Controllers\API\Doctor;

use App\Http\Controllers\Controller;
use App\Models\DoctorDegree;
use Illuminate\Http\Request;

class DoctorDegreeController extends Controller
{
    public function index()
    {
        $degree = DoctorDegree::select('id', 'name_en')->get();
        return $degree;
    }
}
