<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    use HasFactory;
    protected $fillable = ['Description','Date',];
    public $timestamps = false;
    protected $primaryKey = 'Announcement_id';

}
