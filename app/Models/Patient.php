<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    
    protected $table = 'patients';

    protected $fillable = [
        'name_en', 'name_ar', 'email', 'password', 'mobile', 'date_of_birth', 'gender', 'image'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    //Relationship of Patient with Feedback
    public function feedbacks () {
        return $this->hasMany(Feedback::class);
    }
}
