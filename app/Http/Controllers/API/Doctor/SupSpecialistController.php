<?php

namespace App\Http\Controllers\API\Doctor;

use App\Http\Controllers\Controller;
use App\Models\SubSpecialist;
use Illuminate\Http\Request;

class SupSpecialistController extends Controller
{
    public function index($spec_id)
    {
        if (isset($spec_id) && $spec_id !== 'null') {
            $subSpecialist = SubSpecialist::select('id', 'name_en')->where('spec_id', $spec_id)->get();
        } elseif (isset($spec_id) && $spec_id == 'null') {
            $subSpecialist = SubSpecialist::select('id', 'name_en')->get();
        }
        return $subSpecialist;
    }
}
