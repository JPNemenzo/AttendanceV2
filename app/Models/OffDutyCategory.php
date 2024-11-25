<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OffDutyCategory extends Model
{
    use HasFactory;
    protected $fillable = ['description','company_id'];
    
    public $timestamps = false;
    protected $primaryKey = 'category_id';

}
