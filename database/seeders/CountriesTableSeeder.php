<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder {

	public function run()
	{
		DB::table('countries')->delete();
        $countries = include(resource_path('../database/data/countries.php'));
		DB::table('countries')->insert($countries);
	}
}

