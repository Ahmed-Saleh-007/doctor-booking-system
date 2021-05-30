<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialist extends Model
{
    use HasFactory;

    protected $fillable = [
        'ar-name',
        'en-name'
    ];

    //Relationship of Specialist with SubSpecialists
    public function sub_specialists()
    {
        return $this->hasMany(SubSpecialist::class);
    }

}