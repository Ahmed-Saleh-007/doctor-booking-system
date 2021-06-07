<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorDegree extends Model
{
    use HasFactory;

    protected $table = 'doctor_degrees';

    protected $fillable = [
        'name_en',
        'name_ar',
        'description'
    ];

    //Relationship of Degree with Doctors
    public function doctors () {
        return $this->hasMany(Doctor::class);
    }
}