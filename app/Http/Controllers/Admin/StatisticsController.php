<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\DoctorTime;
use App\Models\Specialist;
use Illuminate\Support\Facades\DB;

class StatisticsController extends Controller
{
    public function index()
    {
        return view('admin.statistics.statistics_app');
    }

    public function doctor_specialist()
    {
        $specialists = array();
        $count  = array();

        $doctors = Doctor::select(DB::raw("COUNT(*) as count,spec_id"))
        ->groupBy('spec_id')
        ->pluck('count', 'spec_id');

        foreach ($doctors as $key => $doctor) {
            $specialists[] = Specialist::select('name_'.session('lang'))
            ->where('id', $key)
            ->pluck('name_'.session('lang'));
            $count[] = $doctor;
        }

        $colors_array = array();

        for ($i = 0 ; $i <count($specialists)  ; $i++) {
            $colors_array[] = 'rgb(' . rand(0, 255) . ',' . rand(0, 255) . ','  . rand(0, 255) . ')';
        }

        $data = [
                'id'      => 'myChart_1',
                'colors'  => $colors_array,
                'labels'  => $specialists,
                'data'    => $count
            ];
        return $data;
    }

    public function doctor_revenue($year)
    {
        $doctorInfo = null;
        $fees = null;
        $max_no = 0;
        $doctorFees = DoctorTime::select(DB::raw("SUM(fees) as fees,doctor_id as id"))
        ->whereYear('created_at', $year)
        ->groupBy(DB::raw("doctor_id"))
        ->pluck('fees', 'id');

        if (count($doctorFees) != 0) {
            foreach ($doctorFees as $key => $value) {
                $doctorIds[] = $key;
                $fees[]      = $value;
            }
            $doctors = Doctor::select('name_'.session('lang'), 'email')
                ->whereIn('id', $doctorIds)
                ->pluck('email', 'name_'.session('lang'));

            foreach ($doctors as $key => $value) {
                $doctorInfo[] = $key . ' | '.$value;
            }

            $max_no = max($fees);
        }


        $data = [
            'id'      => 'myChart_2',
            'label'   => 'Profit',
            'labels'  => $doctorInfo,
            'data'    => $fees,
            'max'     => $max_no
        ];
        return $data;
    }
}
