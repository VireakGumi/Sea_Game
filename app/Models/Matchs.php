<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\event;

class Matchs extends Model
{
    use HasFactory;
    protected $fillable = [
        'matching',
        'dateTime',
        'description',
        'event_id'
    ];
    
    function event():BelongsTo{
        return $this->belongsTo(event::class);
    }
}
