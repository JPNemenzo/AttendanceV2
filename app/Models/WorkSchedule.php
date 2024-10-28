<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkSchedule extends Model
{
    use HasFactory;
    protected $fillable =[
        'employee_id',
        'Monday_in',
        'Monday_out',
        'Tuesday_in',
        'Tuesday_out',
        'Wednesday_in',
        'Wednesday_out',
        'Thursday_in',
        'Thursday_out',
        'Friday_in',
        'Friday_out',
        'Saturday_in',
        'Saturday_out',
        'Sunday_in',
        'Sunday_out',
        'Updated_by','Update_on',
    ];

    public $timestamps = false;
    protected $primaryKey = 'work_schedule_id';

}
