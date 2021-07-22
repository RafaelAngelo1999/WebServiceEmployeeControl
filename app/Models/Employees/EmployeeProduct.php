<?php

namespace App\Models\Employees;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeProduct extends Model
{
    use HasFactory;
    protected $table = 'employee_product';

    protected $fillable = 
    [
        'employee_id',
        'product_id',
    ];
}
