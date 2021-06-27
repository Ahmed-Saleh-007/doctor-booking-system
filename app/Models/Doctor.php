<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Doctor extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name_en', 'name_ar', 'email', 'password', 'image', 'spec_id', 'deg_id', 'country_id', 'gender', 'session_time', 'mobile', 'date_of_birth'
    ];

    protected $table = 'doctors';

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $appends = ['total_rate','age',];

    //Relationship of Doctor With Specialist
    public function specialist()
    {
        return $this->belongsTo(Specialist::class, 'spec_id', 'id');
    }

    //Relationship of Doctor with SubSpecialist
    public function subspecialists()
    {
        return $this->belongsToMany(SubSpecialist::class, 'doctor_sub_specialist', 'doc_id', 'subspec_id')->withTimestamps();;
    }


    //Relationship of Doctor with Feedback
    public function feedbacks()
    {
        return $this->hasMany(Feedback::class, 'doc_id');
    }

    //Relationship of Doctor with Degree
    public function degree()
    {
        return $this->belongsTo(DoctorDegree::class, 'deg_id', 'id');
    }

    //Relationship of Doctor with Country
    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id', 'id');
    }

    //Relationship of Doctor with Addresses
    public function addresses()
    {
        return $this->hasMany(DoctorAddress::class);
    }

    //Total Rate of Doctor
    public function getTotalRateAttribute()
    {
        $totalRates  = $this->feedbacks->sum('rate');
        $rates_count = $this->feedbacks->count('*');
        if ($totalRates == 0 && $rates_count == 0) {
            return 0;
        }
        return $totalRates/$rates_count;
    }

    public function getAgeAttribute()
    {
        return Carbon::parse($this->date_of_birth)->age;
    }

}
