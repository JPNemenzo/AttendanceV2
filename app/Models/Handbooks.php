<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Handbooks extends Model
{
    use HasFactory;
    protected $fillable =[
        'Description',
         'Link','Date',
    ];
    protected $primaryKey = 'Handbook_id';
    public $timestamps = false;


}
