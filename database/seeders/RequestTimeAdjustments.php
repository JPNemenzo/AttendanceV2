<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class RequestTimeAdjustments extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('request_time_adjustments')->insert([
            [
                
                'Attendance_id'=> '',
                'Request_type_id'=> '',
                'Start_time'=> now(),
                'End_time'=> '',
                'Total_hours'=> '',
                'Reason'=> '',
               
            ],
         ]);
    }
}
