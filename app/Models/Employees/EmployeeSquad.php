<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeSquad extends Model
{
    use HasFactory;
    protected $table = 'employee_squad';

    protected $fillable = 
    [
        'employee_id',
        'squad_id',
    ];
}
