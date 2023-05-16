<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Models\Matchs;
use App\Models\Stadiums;
use App\Models\Ticket;
use App\Models\Sport;
class event extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_event',
        'sport_id',
        'stadium_id'
    ];
    function matchs():HasMany{
        return $this->hasMany(Matchs::class);
    }
    function ticket():HasMany{
        return $this->hasMany(Ticket::class);
    }
    function stadium():BelongsTo{
        return $this->belongsTo(Stadiums::class);
    }
    function sport():HasOne{
        return $this->HasOne(Sport::class);
    }
    
}
