<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubSpecialist extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_ar',
        'name_en',
        'spec_id',
    ];

    //Relationship of SubSpecialists with Specialist
    public function specialist() {
        return $this->belongsTo(Specialist::class, 'spec_id', 'id');
    }

    //Relationship of SubSpecialist with Doctor
    public function subsepcialist () {
        return $this->belongsToMany(Doctor::class);
    }
}
