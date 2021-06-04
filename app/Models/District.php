<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_en',
        'name_ar',
        'city_id',
    ];

    public function city(){
        return $this->belongsTo(City::class);
    }
}
