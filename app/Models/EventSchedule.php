<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventSchedule extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function edition()
    {
        return $this->belongsTo(Edition::class);
    }
}
