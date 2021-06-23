<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $table = 'books';

    protected $fillable = [
        'doctor_id',
        'address_id',
        'patient_id',
        'day',
        'fees',
        'confirm',
        'date',
        'time'
    ];

    public function doctor()
    {
        return $this->belongsTo(Doctor::class, 'doctor_id');
    }

    public function patient()
    {
        return $this->belongsTo(Patient::class, 'patient_id');
    }

    public function address()
    {
        return $this->belongsTo(DoctorAddress::class, 'address_id');
    }

}
