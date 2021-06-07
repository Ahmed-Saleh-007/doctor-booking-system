<?php

namespace Database\Seeders;

use App\Models\DoctorDegree;
use Illuminate\Database\Seeder;

class DoctorDegreeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DoctorDegree::count() == 0) {
            $test = [
                [
                    'name_en' => 'Professor',
                    'name_ar' => 'أستاذ',
                    'description' => 'Professor is an academic rank at universities and other post-secondary education and research institutions in most countries.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],[
                    'name_en' => 'Lecturer',
                    'name_ar' => 'مدرس',
                    'description' => 'Lecturer is an academic rank within many universities, though the meaning of the term varies somewhat from country to country.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],[
                    'name_en' => 'Consultant',
                    'name_ar' => 'استشاري',
                    'description' => 'A consultant is a professional who provides advice and further purposeful activities in an area of specialization.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],[
                    'name_en' => 'Specialist',
                    'name_ar' => 'أخصائي',
                    'description' => 'test Specialist',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],[
                    'name_en' => 'Assistant',
                    'name_ar' => 'مساعد',
                    'description' => 'test Assistant',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ]
            ];
            foreach ($test as $t) {
                DoctorDegree::create($t);
            }
        } else {
            echo "\e[31mTable is not empty, therefore NOT ";
        }
    }
}
