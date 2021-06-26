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
            [
            'name_en'        => 'doctor1',
            'name_ar'        => 'اول دكتور',
            'email'          => 'doctor1@doctor.com',
            'password'       => Hash::make(123456789),
            'gender'         => 'male',
            'mobile'         => '01234567891',
            'date_of_birth'  => '1990-06-09',
            'session_time'   => 15,
            'remember_token' => Str::random(10),
            'spec_id'        => 1,
            'deg_id'         => 1,
            'country_id'     => 70,
            'created_at'     => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'     => Carbon::now()->format('Y-m-d H:i:s'),
        ],[
            'name_en'        => 'doctor2',
            'name_ar'        => 'ثانى دكتور',
            'email'          => 'doctor2@doctor.com',
            'password'       => Hash::make(123456789),
            'gender'         => 'male',
            'mobile'         => '01234567892',
            'date_of_birth'  => '1990-05-09',
            'session_time'   => 20,
            'remember_token' => Str::random(10),
            'spec_id'        => 1,
            'deg_id'         => 1,
            'country_id'     => 70,
            'created_at'     => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'     => Carbon::now()->format('Y-m-d H:i:s'),
        ]]);
    }
}
