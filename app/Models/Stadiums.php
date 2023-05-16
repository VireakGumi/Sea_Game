<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Zones;
use App\Models\event;
class Stadiums extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_stadium',
        'location'
    ];
    function events():HasMany{
        return $this->hasMany(event::class);
    }
    function zones():HasMany{
        return $this->hasMany(Zones::class);
    }
}
