<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorAddress extends Model
{
    use HasFactory;
    protected $table = 'doctor_addresses';

    protected $fillable = ['address_en', 'address_ar', 'doctor_id','district_id', 'longitude', 'latitude','fees'];

    public function doctor()
    {
        return $this->belongsTo(Doctor::class, 'doctor_id');
    }

    public function district()
    {
        return $this->belongsTo(District::class, 'district_id');
    }
}
