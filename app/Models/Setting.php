<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $table    = 'settings';
	protected $fillable = [
		'sitename_en', 'sitename_ar', 'logo', 'icon', 'email', 'description', 'keywords', 'status', 'maintenance_message', 'main_lang',
	];
}
