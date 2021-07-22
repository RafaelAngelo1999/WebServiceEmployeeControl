<?php

namespace App\Models\Squads;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Squad extends Model
{
    use HasFactory;
    protected $table = 'squad';

    protected $fillable = 
    [
        'name',
        'description',
    ];
}
