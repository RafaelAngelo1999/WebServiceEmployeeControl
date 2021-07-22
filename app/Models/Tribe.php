<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tribe extends Model
{
    use HasFactory;
    protected $table = 'tribe';

    protected $fillable = 
    [
        'name',
        'description',
    ];
}
