<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorTime extends Model
{
    use HasFactory;

    protected $table = 'doctor_times';

    protected $fillable = [
        'day',
        'from',
        'to',
        'fees',
        'session_number',
        'doctor_id',
        'doctor_address_id',
    ];


    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }

    public function doctor_address(){
        return $this->belongsTo(Doctor::class,'doctor_address_id', 'id');
    }
}
