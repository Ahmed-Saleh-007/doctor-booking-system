<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class SpecialistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $departments = include(resource_path('../database/data/specialists.php'));
        foreach($departments as $key => $value) {
            DB::table('specialists')->insert(array(
                'name_ar' => $value[0],
                'name_en' => $value[1],
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ));
        }
    }
}