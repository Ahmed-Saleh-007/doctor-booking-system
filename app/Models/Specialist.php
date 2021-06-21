<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialist extends Model
{
    use HasFactory;

    protected $table = 'specialists';

    protected $fillable = [
        'name_ar',
        'name_en',
    ];

    //Relationship of Specialist with Doctors
    public function doctors()
    {
        return $this->hasMany(Doctor::class);
    }

    //Relationship of Specialist with SubSpecialists
    public function sub_specialists()
    {
        return $this->hasMany(SubSpecialist::class);
    }
}
