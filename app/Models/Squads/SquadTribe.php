<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SquadTribe extends Model
{
    use HasFactory;
    protected $table = 'squad_tribe';

    protected $fillable = 
    [
        'squad_id',
        'tribe_id',
    ];
}
