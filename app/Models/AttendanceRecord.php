<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttendanceRecord extends Model
{
    use HasFactory;
    protected $fillable = [ 'Employee_id',
    'Cutoff_id',
    'Total_hours',
    'Total_break',
    'Total_ot',
    'Rate',
    'Date',
   'Duty_start',
    'Time_in',
    'Time_out',
    'Status',
    'Has_night_diff',];
    public $timestamps = false;
    protected $primaryKey = 'Attendance_id';



   
}
