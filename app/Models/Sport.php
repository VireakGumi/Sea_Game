<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Sport extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
    ];
    function events():BelongsTo{
        return $this->belongsTo(event::class);
    }
}
