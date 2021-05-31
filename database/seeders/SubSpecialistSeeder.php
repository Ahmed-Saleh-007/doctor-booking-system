<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class SubSpecialistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $sub_specialists = include(resource_path('../database/data/sub_specialists.php'));
        foreach($sub_specialists as $key => $value) {
            foreach ($value as $subKey => $value) {
                $splitName = explode(',', $value);
                DB::table('sub_specialists')->insert(array(
                    'spec_id' => $key,
                    'ar_name' => $splitName[0],
                    'en_name' => $splitName[1],
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ));
            }
        }
    }
}