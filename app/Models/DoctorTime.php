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

    protected $appends = ['time_slot', 'blocked_times'];


    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }

    public function doctor_address(){
        return $this->belongsTo(Doctor::class,'doctor_address_id', 'id');
    }

    public function getTimeSlotAttribute(){
        $start = strtotime($this->from);
        $end   = strtotime($this->to);
        $slot  = $this->session_number * 60;

        while($start < $end)
        {
            if( ($slot !== null) && ($start + $slot <= $end) )
            {
                $intervals[] = array( 'starts' => date("H:i:s",$start), 'ends' => date("H:i:s",($start += $slot)) );
            }
            else if( $start + $slot <= $end )
            {
                $intervals[] = array( 'starts' => date("H:i:s",$start), 'ends' => date("H:i:s",($start += $slot)) );
            }
        }

        return $intervals;
    }

    public function getBlockedTimesAttribute(){
        
        $blocked_times = Book::where('address_id', $this->doctor_address_id)->get();

        return $blocked_times;
    }

    
    
}
