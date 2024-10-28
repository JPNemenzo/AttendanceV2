<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class Payslip extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Payslips')->insert([
            [
                
                'Employee_id' => '',
    'Cutoff_id' => '',
    'Hours_rendered' => '',
    'OT_rendered' => '',
    'Total_deduction' => '',
    'Total_pay' => '',
               
            ],
         ]);
    }
}
