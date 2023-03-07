<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Movie;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Genre extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function movies() {
        return $this->hasMany(Movie::class);
    }
}