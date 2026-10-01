<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    use HasFactory;
    
    protected $guarded = [];

    public function nominee()
    {
        return $this->belongsTo(Nominee::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
