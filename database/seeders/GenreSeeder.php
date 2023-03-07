<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Genre;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genres = ['Horror', 'Comedy', 'Thriller', 'Cinepanetton', 'Action', 'Drama', 'Fantasy', 'Sci-Fi'];

        foreach($genres as $item){
            $new_genre = new Genre();

            $new_genre->name = $item;
            $new_genre->slug = Str::slug($new_genre->name, '-');

            $new_genre->save();
        }
    }
}
