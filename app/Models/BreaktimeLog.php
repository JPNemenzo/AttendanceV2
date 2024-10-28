<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BreaktimeLog extends Model
{
    use HasFactory;
    protected $fillable = [ 
        'Attendance_id',
    'Total_hours','Field', 'Start_time',
    'End_time',];
    public $timestamps = false;
    protected $primaryKey = 'Breaktime_id';


   
}
