<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// MODEL
use App\Models\Actor;

class ActorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $actors = 
        [
            'Marlon Brando', 
            'Al Pacino', 
            'James Caan', 
            'Robert Duval', 
            'Viggo Mortensen', 
            'Elijah Wood', 
            'Sean Astin', 
            'Ian McKellen', 
            'Andy Serkis', 
            'Liv Tyler', 
            'Christopher Lee', 
            'Hugo Weaving', 
            'Karl Urban', 
            'Cate Blanchett',
            'Lacey Duvall', 
            'Jack Nicholson',
            'Sandra Bullock', 
            'George Clooney', 
            'Ed Harris',
            'Natalie Portman', 
            'Stephen Rea',
            'John Travolta',
            'Samuel L Jackson', 
            'Bruce Willis', 
            'Uma Thurman',
            'Tom Hanks', 
            'Robin Wright', 
            'Gary Sinise', 
            'Mykelti Williamson', 
            'Sally Field',
            'Mark Hammil', 
            'Harrison Ford', 
            'Carrie Fisher', 
            'Billy Dee Williams', 
            'David Prowse',
            'Henry Thomas',
            'Drew Barrymore',
            'Johnny Depp', 
            'Christina Ricci', 
            'Miranda Richardson', 
            'Michael Gambon', 
            'Christopher Walken',
            'Tom Cruise', 
            'Nicole Kidman'
        ];

        foreach($actors as $actor){
            $newActor = new Actor();
            $newActor->name = $actor;
            $newActor->slug = Actor::generateSlug($newActor->name);

            $newActor->save();
        }
    }
}
