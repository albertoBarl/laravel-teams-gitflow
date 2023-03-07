<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Genre;
use App\Models\Actor;

// STR
use Illuminate\Support\Str;

class Movie extends Model
{
    use HasFactory;
    protected $guarded = [];

    public static function generateSlug($title)
    {
        return Str::slug($title, '-');
    }

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }
    public function actors()
    {
        return $this->belongsToMany(Actor::class);
    }
}
