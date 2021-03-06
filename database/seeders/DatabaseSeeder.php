<?php

namespace Database\Seeders;

use App\Models\DoctorDegree;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(AdminSeeder::class);
        $this->call(SpecialistSeeder::class);
        $this->call(SubSpecialistSeeder::class);
        $this->call(SettingSeeder::class);
        $this->call(CountriesTableSeeder::class);
        $this->call(CitiesTableSeeder::class);
        $this->call(DistrictsTableSeeder::class);
        $this->call(DoctorDegreeSeeder::class);
        $this->call(DoctorSeeder::class);
    }
}
