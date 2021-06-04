<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Doctor extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name_en', 'name_ar', 'email', 'password', 'image',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
    
    //Relationship of Doctor With Specialist
    public function sepcialist () {
        return $this->belongsTo(Specialist::class, 'spec_id', 'id');
    }

    //Relationship of Doctor with SubSpecialist
    public function subsepcialist () {
        return $this->belongsToMany(SubSpecialist::class);
    }
}