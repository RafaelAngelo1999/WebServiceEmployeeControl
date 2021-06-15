<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkingDay extends Model
{
    use HasFactory;
    protected $table = 'working_day';

    protected $fillable = 
    [
        'employee_id',
        'first_entry',
        'first_exit',
        'second_entry',
        'lunch_entry',
        'lunch_exit',
        'second_exit',
    ];
}
