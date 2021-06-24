<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('doctors')->insert([
            'name_en'        => 'doctor',
            'name_ar'        => 'دكتور',
            'email'          => 'doctor@doctor.com',
            'password'       => Hash::make(123456789),
            'remember_token' => Str::random(10),
            'spec_id'        => 1,
            'deg_id'         => 1,
            'created_at'     => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'     => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
