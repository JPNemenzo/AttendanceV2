<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MeritType extends Model
{
    use HasFactory;
    protected $fillable = ['description'];
    public $timestamps = false;
    protected $primaryKey = 'merit_type_id';


}