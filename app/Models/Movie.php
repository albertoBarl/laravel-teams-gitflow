<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// STR
use Illuminate\Support\Str;

class Movie extends Model
{
    use HasFactory;
    protected $guarded = [];

    public static function generateSlug($title){
        return Str::slug($title, '-');
    }
}
