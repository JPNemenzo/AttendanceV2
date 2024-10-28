<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $fillable = ['description',
    'employee_count',
    'Timezone',];
    public $timestamps = false;
    protected $primaryKey = 'company_id';

}
