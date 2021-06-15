<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkingDayStandardWeek extends Model
{
    use HasFactory;
    protected $table = 'working_day_standard_week';

    protected $fillable = 
    [
        'day',
        'working_day_standard_id',
        'employee_id',
    ];
}
