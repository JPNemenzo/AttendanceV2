<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestTimeType extends Model
{
    use HasFactory;
    protected $fillable = ['Description'];
    public $timestamps = false;
    protected $primaryKey = 'Request_type_id';


}
