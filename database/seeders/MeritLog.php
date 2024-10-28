<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class MeritLog extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('merit_logs')->insert([
            [
                
                'Employee_id'=> '',
    'Employee_id_from'=> '',
    'Merit_category_id'=> '',
    'Merit_type_id'=> '',
    'Reasons'=> '',
    'Points'=> '',
    'Date'=> now(),               
            ],
         ]);
    }
}
