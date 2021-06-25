<?php

namespace App\Http\Controllers\API\Doctor;

use App\Http\Controllers\Controller;
use App\Models\SubSpecialist;
use Illuminate\Http\Request;

class SupSpecialistController extends Controller
{
    public function index()
    {
        $subSpecialist = SubSpecialist::select('id', 'name_en')->get();
        return $subSpecialist;
    }
}
