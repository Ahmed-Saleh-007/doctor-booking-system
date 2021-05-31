<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder {

	public function run()
	{
		DB::table('countries')->delete();

		$countries = array(
			array('code' => 'US', 'name_ar' =>'', 'name_en' => 'United States', 'created_at' => now(), 'updated_at' => now()),
			array('code' => 'CA', 'name_ar' =>'', 'name_en' => 'Canada', 'created_at' => now(), 'updated_at' => now()),
			array('code' => 'AF', 'name_ar' =>'', 'name_en' => 'Afghanistan', 'created_at' => now(), 'updated_at' => now()),
			array('code' => 'AL', 'name_ar' =>'', 'name_en' => 'Albania', 'created_at' => now(), 'updated_at' => now()),
			array('code' => 'DZ', 'name_ar' =>'', 'name_en' => 'Algeria', 'created_at' => now(), 'updated_at' => now()),
			array('code' => 'AS', 'name_ar' =>'', 'name_en' => 'American Samoa', 'created_at' => now(), 'updated_at' => now()),
			array('code' => 'AD', 'name_ar' =>'', 'name_en' => 'Andorra', 'created_at' => now(), 'updated_at' => now()),
			array('code' => 'AO', 'name_ar' =>'', 'name_en' => 'Angola', 'created_at' => now(), 'updated_at' => now()),
			array('code' => 'AI', 'name_ar' =>'', 'name_en' => 'Anguilla', 'created_at' => now(), 'updated_at' => now()),
			array('code' => 'AQ', 'name_ar' =>'', 'name_en' => 'Antarctica', 'created_at' => now(), 'updated_at' => now()),
			array('code' => 'AG', 'name_ar' =>'', 'name_en' => 'Antigua and/or Barbuda', 'created_at' => now(), 'updated_at' => now()),
			array('code' => 'AR', 'name_ar' =>'', 'name_en' => 'Argentina', 'created_at' => now(), 'updated_at' => now()),
			array('code' => 'AM', 'name_ar' =>'', 'name_en' => 'Armenia', 'created_at' => now(), 'updated_at' => now()),
			array('code' => 'AW', 'name_ar' =>'', 'name_en' => 'Aruba', 'created_at' => now(), 'updated_at' => now()),
			array('code' => 'AU', 'name_ar' =>'', 'name_en' => 'Australia', 'created_at' => now(), 'updated_at' => now()),
			array('code' => 'AT', 'name_ar' =>'', 'name_en' => 'Austria', 'created_at' => now(), 'updated_at' => now()),
			array('code' => 'AZ', 'name_ar' =>'', 'name_en' => 'Azerbaijan', 'created_at' => now(), 'updated_at' => now()),
			array('code' => 'BS', 'name_ar' =>'', 'name_en' => 'Bahamas', 'created_at' => now(), 'updated_at' => now()),
			array('code' => 'BH', 'name_ar' =>'', 'name_en' => 'Bahrain', 'created_at' => now(), 'updated_at' => now()),
			array('code' => 'BD', 'name_ar' =>'', 'name_en' => 'Bangladesh', 'created_at' => now(), 'updated_at' => now()),
			array('code' => 'BB', 'name_ar' =>'', 'name_en' => 'Barbados', 'created_at' => now(), 'updated_at' => now()),
			array('code' => 'BY', 'name_ar' =>'', 'name_en' => 'Belarus', 'created_at' => now(), 'updated_at' => now()),
			array('code' => 'BE', 'name_ar' =>'', 'name_en' => 'Belgium', 'created_at' => now(), 'updated_at' => now()),
			array('code' => 'BZ', 'name_ar' =>'', 'name_en' => 'Belize', 'created_at' => now(), 'updated_at' => now()),
			array('code' => 'BJ', 'name_ar' =>'', 'name_en' => 'Benin', 'created_at' => now(), 'updated_at' => now()),
			array('code' => 'BM', 'name_ar' =>'', 'name_en' => 'Bermuda', 'created_at' => now(), 'updated_at' => now()),
			array('code' => 'BT', 'name_ar' =>'', 'name_en' => 'Bhutan', 'created_at' => now(), 'updated_at' => now()),
			array('code' => 'BO', 'name_ar' =>'', 'name_en' => 'Bolivia', 'created_at' => now(), 'updated_at' => now()),
			array('code' => 'BA', 'name_ar' =>'', 'name_en' => 'Bosnia and Herzegovina', 'created_at' => now(), 'updated_at' => now()),
			array('code' => 'BW', 'name_ar' =>'', 'name_en' => 'Botswana', 'created_at' => now(), 'updated_at' => now()),
			array('code' => 'BV', 'name_ar' =>'', 'name_en' => 'Bouvet Island', 'created_at' => now(), 'updated_at' => now()),
			array('code' => 'BR', 'name_ar' =>'', 'name_en' => 'Brazil', 'created_at' => now(), 'updated_at' => now()),
			array('code' => 'IO', 'name_ar' =>'', 'name_en' => 'British lndian Ocean Territory', 'created_at' => now(), 'updated_at' => now()),
			array('code' => 'BN', 'name_ar' =>'', 'name_en' => 'Brunei Darussalam', 'created_at' => now(), 'updated_at' => now()),
			array('code' => 'BG', 'name_ar' =>'', 'name_en' => 'Bulgaria', 'created_at' => now(), 'updated_at' => now()),
			array('code' => 'BF', 'name_ar' =>'', 'name_en' => 'Burkina Faso', 'created_at' => now(), 'updated_at' => now()),
			array('code' => 'BI', 'name_ar' =>'', 'name_en' => 'Burundi', 'created_at' => now(), 'updated_at' => now()),
			array('code' => 'KH', 'name_ar' =>'', 'name_en' => 'Cambodia', 'created_at' => now(), 'updated_at' => now()),
			array('code' => 'CM', 'name_ar' =>'', 'name_en' => 'Cameroon', 'created_at' => now(), 'updated_at' => now()),
			array('code' => 'CV', 'name_ar' =>'', 'name_en' => 'Cape Verde', 'created_at' => now(), 'updated_at' => now()),
			array('code' => 'KY', 'name_ar' =>'', 'name_en' => 'Cayman Islands', 'created_at' => now(), 'updated_at' => now()),
			array('code' => 'CF', 'name_ar' =>'', 'name_en' => 'Central African Republic', 'created_at' => now(), 'updated_at' => now()),
			array('code' => 'TD', 'name_ar' =>'', 'name_en' => 'Chad', 'created_at' => now(), 'updated_at' => now()),
			array('code' => 'CL', 'name_ar' =>'', 'name_en' => 'Chile', 'created_at' => now(), 'updated_at' => now()),
			array('code' => 'CN', 'name_ar' =>'', 'name_en' => 'China', 'created_at' => now(), 'updated_at' => now()),
			array('code' => 'CX', 'name_ar' =>'', 'name_en' => 'Christmas Island', 'created_at' => now(), 'updated_at' => now()),
			array('code' => 'CC', 'name_ar' =>'', 'name_en' => 'Cocos (Keeling) Islands', 'created_at' => now(), 'updated_at' => now()),
			array('code' => 'CO', 'name_ar' =>'', 'name_en' => 'Colombia', 'created_at' => now(), 'updated_at' => now()),
			array('code' => 'KM', 'name_ar' =>'', 'name_en' => 'Comoros', 'created_at' => now(), 'updated_at' => now()),
			array('code' => 'CG', 'name_ar' =>'', 'name_en' => 'Congo', 'created_at' => now(), 'updated_at' => now()),
			array('code' => 'CK', 'name_ar' =>'', 'name_en' => 'Cook Islands', 'created_at' => now(), 'updated_at' => now()),
			array('code' => 'CR', 'name_ar' =>'', 'name_en' => 'Costa Rica', 'created_at' => now(), 'updated_at' => now()),
			array('code' => 'HR', 'name_ar' =>'', 'name_en' => 'Croatia (Hrvatska)', 'created_at' => now(), 'updated_at' => now()),
			array('code' => 'CU', 'name_ar' =>'', 'name_en' => 'Cuba', 'created_at' => now(), 'updated_at' => now()),
			array('code' => 'CY', 'name_ar' =>'', 'name_en' => 'Cyprus', 'created_at' => now(), 'updated_at' => now()),
			array('code' => 'CZ', 'name_ar' =>'', 'name_en' => 'Czech Republic', 'created_at' => now(), 'updated_at' => now()),
			array('code' => 'CD', 'name_ar' =>'', 'name_en' => 'Democratic Republic of Congo', 'created_at' => now(), 'updated_at' => now()),
			array('code' => 'DK', 'name_ar' =>'', 'name_en' => 'Denmark', 'created_at' => now(), 'updated_at' => now()),
			array('code' => 'DJ', 'name_ar' =>'', 'name_en' => 'Djibouti', 'created_at' => now(), 'updated_at' => now()),
			array('code' => 'DM', 'name_ar' =>'', 'name_en' => 'Dominica', 'created_at' => now(), 'updated_at' => now()),
			array('code' => 'DO', 'name_ar' =>'', 'name_en' => 'Dominican Republic', 'created_at' => now(), 'updated_at' => now()),
			array('code' => 'TP', 'name_ar' =>'', 'name_en' => 'East Timor', 'created_at' => now(), 'updated_at' => now()),
			array('code' => 'EC', 'name_ar' =>'', 'name_en' => 'Ecudaor', 'created_at' => now(), 'updated_at' => now()),
			array('code' => 'EG', 'name_ar' =>'', 'name_en' => 'Egypt', 'created_at' => now(), 'updated_at' => now()),
			array('code' => 'SV', 'name_ar' =>'', 'name_en' => 'El Salvador', 'created_at' => now(), 'updated_at' => now()),
			array('code' => 'GQ', 'name_ar' =>'', 'name_en' => 'Equatorial Guinea', 'created_at' => now(), 'updated_at' => now()),
			array('code' => 'ER', 'name_ar' =>'', 'name_en' => 'Eritrea', 'created_at' => now(), 'updated_at' => now()),
			array('code' => 'EE', 'name_ar' =>'', 'name_en' => 'Estonia', 'created_at' => now(), 'updated_at' => now()),
			array('code' => 'ET', 'name_ar' =>'', 'name_en' => 'Ethiopia', 'created_at' => now(), 'updated_at' => now()),
			array('code' => 'FK', 'name_ar' =>'', 'name_en' => 'Falkland Islands (Malvinas)', 'created_at' => now(), 'updated_at' => now()),
		);
		DB::table('countries')->insert($countries);
	}
}
