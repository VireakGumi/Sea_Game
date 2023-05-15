<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zones extends Model
{
    use HasFactory;
    protected $fillable = [
        'zone_name',
        'number_of_ticket'
    ];
}
