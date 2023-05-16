<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Zones;
use App\Models\event;

class Ticket extends Model
{
    use HasFactory;
    protected $fillable = [
        'code',
        'event_id',
        'zone_id'
    ];
    function events():BelongsTo{
        return $this->belongsTo(event::class);
    }
    function zone():BelongsTo{
        return $this->belongsTo(Ticket::class);
    }
}
