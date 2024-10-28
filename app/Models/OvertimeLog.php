<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OvertimeLog extends Model
{
    use HasFactory;
    protected $fillable = [ 'Attendance_id',
    'Start_time',
    'End_time',
    'Total_hours','Field',];
    public $timestamps = false;
    protected $primaryKey = 'Overtime_id';


}
