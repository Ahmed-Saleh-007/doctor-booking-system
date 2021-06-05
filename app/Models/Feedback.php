<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_id',
        'doc_id',
        'rate',
        'comment',
    ];

    protected $table = 'feedbacks';

    //Relationship Between Doctor and Feedback
    public function doctor() {
        return $this->belongsTo(Doctor::class, 'doc_id');
    }

    //Relationship Between Patient and Feedback
    public function patient() {
        return $this->belongsTo(Patient::class, 'patient_id');
    }
}