<?php

namespace Database\Seeders;

use App\Models\District;
use App\Models\City;
use Illuminate\Database\Seeder;
class DistrictsTableSeeder extends Seeder
{

    public function run()
    {
        $buheira = City::where('name_ar', 'البحيرة')->first();

        District::create(['city_id' => $buheira->id, 'name_ar' => 'مركز ابو المطامير', 'name_en'     => 'Abu El Matamir']);
        District::create(['city_id' => $buheira->id, 'name_ar' => 'مركز ابوحمص', 'name_en'           => 'Abu Hummus']);
        District::create(['city_id' => $buheira->id, 'name_ar' => 'مركز الدلنجات', 'name_en'         => 'El Delengat']);
        District::create(['city_id' => $buheira->id, 'name_ar' => 'مركز المحمودية', 'name_en'        => 'Mahmoudiyah']);
        District::create(['city_id' => $buheira->id, 'name_ar' => 'مركز بدر', 'name_en'              => 'Badr']);
        District::create(['city_id' => $buheira->id, 'name_ar' => 'مركز دمنهور', 'name_en'           => 'Damanhour']);
        District::create(['city_id' => $buheira->id, 'name_ar' => 'مركز غرب النوبارية', 'name_en'    => 'West Nubariyah']);
        District::create(['city_id' => $buheira->id, 'name_ar' => 'مركز حوش عيسى', 'name_en'         => 'Hosh Essa']);
        District::create(['city_id' => $buheira->id, 'name_ar' => 'مركز إدكو', 'name_en'             => 'Edku']);
        District::create(['city_id' => $buheira->id, 'name_ar' => 'مركز ايتاى البارود', 'name_en'    => 'Itay El Barud']);
        District::create(['city_id' => $buheira->id, 'name_ar' => 'مركز كوم حمادة', 'name_en'        => 'Kom Hamada']);
        District::create(['city_id' => $buheira->id, 'name_ar' => 'مركز كفر الدوار', 'name_en'       => 'Kafr ad Dawwār']);
        District::create(['city_id' => $buheira->id, 'name_ar' => 'مركز شبراخيت', 'name_en'          => 'Shubrakhit']);
    }
}
