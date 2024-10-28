<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payslip extends Model
{
    use HasFactory;
    protected $fillable = [ 'Employee_id',
    'Cutoff_id',
    'Hours_rendered',
    'OT_rendered',
    'Total_deduction',
    'Total_pay',];
    public $timestamps = false;
    protected $primaryKey = 'Payslip_id';


   
}
