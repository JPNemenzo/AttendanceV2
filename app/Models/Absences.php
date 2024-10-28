<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absences extends Model
{
    use HasFactory;
    protected $fillable = ['Employee_id',
    'Attendance_id',
   'Date',
    'Reason',];

    protected $primaryKey = 'Absent_id';
    public $timestamps = false;



    

    
}
