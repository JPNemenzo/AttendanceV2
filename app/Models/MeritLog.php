<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MeritLog extends Model
{
    use HasFactory;
    protected $fillable = [  'Employee_id',
    'Employee_id_from',
    'Merit_category_id',
    'Merit_type_id',
    'Reasons',
    'Points',
    'Date',];
    public $timestamps = false;
    protected $primaryKey = 'Merit_id';



  
}
