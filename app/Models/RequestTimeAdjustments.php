<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestTimeAdjustments extends Model
{
    use HasFactory;

    protected $fillable = [
        'Attendance_id',
        'Request_type_id',
        'Start_time',
        'End_time',
        'Total_hours',
        'Reason',
    ];

    public $timestamps = false;
    protected $primaryKey = 'Time_adjusment_id';


 
}
