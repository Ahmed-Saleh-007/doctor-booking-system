<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Country;
use Illuminate\Database\Seeder;


class CityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $egypt = Country::create(['code' => 'EG', 'code' => 'BS', 'name_ar' => '', 'name_en' => 'Egypt', 'created_at' => now(), 'updated_at' => now()]);

        City::create(['country_id' => $egypt->id, 'code' => 'BS', 'name_ar' => 'القاهرة', 'name_en'     => 'Cairo']);
        City::create(['country_id' => $egypt->id, 'code' => 'BS', 'name_ar' => 'الجيزه', 'name_en'      => 'Giza']);
        City::create(['country_id' => $egypt->id, 'code' => 'BS', 'name_ar' => 'الآسكندرية', 'name_en'  => 'Alex']);
        City::create(['country_id' => $egypt->id, 'code' => 'BS', 'name_ar' => 'شبرا الخيمة', 'name_en' => 'Shubrā al Khaymah']);
        City::create(['country_id' => $egypt->id, 'code' => 'BS', 'name_ar' => 'الآسكندرية', 'name_en'  => 'Ḩalwān']);
        City::create(['country_id' => $egypt->id, 'code' => 'BS', 'name_ar' => 'الآسكندرية', 'name_en'  => 'Al Maḩallah al Kubrá']);
        City::create(['country_id' => $egypt->id, 'code' => 'BS', 'name_ar' => 'السويس', 'name_en'      => 'Suez']);
        City::create(['country_id' => $egypt->id, 'code' => 'BS', 'name_ar' => 'المنصورة', 'name_en'    => 'Al Manşūrah']);
        City::create(['country_id' => $egypt->id, 'code' => 'BS', 'name_ar' => 'الفيوم', 'name_en'      => 'Al Fayyūm']);
        City::create(['country_id' => $egypt->id, 'code' => 'BS', 'name_ar' => 'بور سعيد', 'name_en'    => 'Port Said']);
        City::create(['country_id' => $egypt->id, 'code' => 'BS', 'name_ar' => 'الزقازيق', 'name_en'    => 'Az Zaqāzīq']);
        City::create(['country_id' => $egypt->id, 'code' => 'BS', 'name_ar' => 'الاسماعيلية', 'name_en'    => 'Ismailia']);
        City::create(['country_id' => $egypt->id, 'code' => 'BS', 'name_ar' => 'اسوان', 'name_en'    => 'Aswān']);
        City::create(['country_id' => $egypt->id, 'code' => 'BS', 'name_ar' => 'كفر الدوار', 'name_en'    => 'Kafr ad Dawwār']);
        City::create(['country_id' => $egypt->id, 'code' => 'BS', 'name_ar' => 'دمنهور', 'name_en'    => 'Damanhūr']);
        City::create(['country_id' => $egypt->id, 'code' => 'BS', 'name_ar' => 'المنيا', 'name_en'    => 'Al Minyā']);
        City::create(['country_id' => $egypt->id, 'code' => 'BS', 'name_ar' => 'دمياط', 'name_en'    => 'Damietta']);
        City::create(['country_id' => $egypt->id, 'code' => 'BS', 'name_ar' => 'الاقصر', 'name_en'    => 'Luxor']);
        City::create(['country_id' => $egypt->id, 'code' => 'BS', 'name_ar' => 'قنا', 'name_en'    => 'Qinā']);
        City::create(['country_id' => $egypt->id, 'code' => 'BS', 'name_ar' => 'سوهاج', 'name_en'    => 'Sūhāj']);
        City::create(['country_id' => $egypt->id, 'code' => 'BS', 'name_ar' => 'بنى سويف', 'name_en'    => 'Banī Suwayf']);
        City::create(['country_id' => $egypt->id, 'code' => 'BS', 'name_ar' => 'الزقازيق', 'name_en'    => 'Shibīn al Kawm']);
        City::create(['country_id' => $egypt->id, 'code' => 'BS', 'name_ar' => 'الزقازيق', 'name_en'    => 'Al ‘Arīsh']);
        City::create(['country_id' => $egypt->id, 'code' => 'BS', 'name_ar' => 'الزقازيق', 'name_en'    => 'Al Ghardaqah']);
        City::create(['country_id' => $egypt->id, 'code' => 'BS', 'name_ar' => 'الزقازيق', 'name_en'    => 'Banhā']);
        City::create(['country_id' => $egypt->id, 'code' => 'BS', 'name_ar' => 'الزقازيق', 'name_en'    => 'Kafr ash Shaykh']);
        City::create(['country_id' => $egypt->id, 'code' => 'BS', 'name_ar' => 'الزقازيق', 'name_en'    => 'Marsá Maţrūḩ']);
    }
}
