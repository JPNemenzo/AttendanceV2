<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class OvertimeLog extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('overtime_logs')->insert([
            [
              
                'Attendance_id'=> '',
    'Start_time'=> now(),
    'End_time'=> '',
    'Total_hours'=> '','Field'=> '',
               
            ],
         ]);
    }
}
