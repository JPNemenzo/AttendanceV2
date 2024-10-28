<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cutoff extends Model
{
    use HasFactory;
    protected $fillable = ['Date_start',
    'Date_end',
    'Conversion_rate',];
    public $timestamps = false;
    protected $primaryKey = 'Cutoff_id';

    
    
}
