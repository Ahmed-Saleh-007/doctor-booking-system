<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Doctor extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name_en', 'name_ar', 'email', 'password', 'image', 'spec_id', 'deg_id', 'country_id','gender','session_time','mobile','age'
    ];

    protected $table = 'doctors';

    protected $hidden = [
        'password', 'remember_token',
    ];

    //Relationship of Doctor With Specialist
    public function specialist()
    {
        return $this->belongsTo(Specialist::class, 'spec_id', 'id');
    }

    //Relationship of Doctor with SubSpecialist
    public function subsepcialist()
    {
        return $this->belongsToMany(SubSpecialist::class);
    }

    //Relationship of Doctor with Feedback
    public function feedbacks()
    {
        return $this->hasMany(Feedback::class);
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
}
