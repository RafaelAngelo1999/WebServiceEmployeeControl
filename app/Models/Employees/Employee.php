<?php

namespace App\Models\Employees;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $table = 'employee';

    protected $fillable = 
    [
        'name',
        'description',
        'standard',
        'office_id',
        'employee_status_id',
        'created_at',
        'updated_at'
    ];
}
