<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class WorkSchedule extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('work_schedules')->insert([
            [
                
                'employee_id'=> '',
        'Monday_in'=> '',
        'Monday_out'=> '',
        'Tuesday_in'=> '',
        'Tuesday_out'=> '',
        'Wednesday_in'=> '',
        'Wednesday_out'=> '',
        'Thursday_in'=> '',
        'Thursday_out'=> '',
        'Friday_in'=> '',
        'Friday_out'=> '',
        'Saturday_in'=> '',
        'Saturday_out'=> '',
        'Sunday_in'=> '',
        'Sunday_out'=> '',
        'Updated_by'=> '','Update_on'=> now(),
               
            ],
         ]);
    }
}
