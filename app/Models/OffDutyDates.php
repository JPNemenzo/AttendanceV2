<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OffDutyDates extends Model
{
    use HasFactory;
    protected $fillable = ['Field','Description','Date','Percentage',];
    public $timestamps = false;
    protected $primaryKey = 'Holiday_id';

    
}
