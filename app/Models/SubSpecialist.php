<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubSpecialist extends Model
{
    use HasFactory;

    protected $fillable = [
        'ar_name',
        'en_name',
        'spec_id',
    ];

    //Relationship of SubSpecialists with SubSpecialist
    public function specialist() {
        return $this->belongsTo(Specialist::class, 'spec_id', 'id');
    }
}
