<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Stadiums;
use App\Models\Ticket;
class Zones extends Model
{
    use HasFactory;
    protected $fillable = [
        'zone_name',
        'number_of_ticket',
        'stadium_id',   
    ];
    function tickets():HasMany{
        return $this->hasMany(Ticket::class);
    }
    function stadiums():BelongsTo{
        return $this->belongsTo(Stadiums::class);
    }

}
