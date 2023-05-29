<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Movie;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('db.comics');
        foreach ($comics as $comic) {
            $newMovie = new Movie();
            $newMovie->title = $comic['title'];
            $newMovie->description =$comic['description'];
            $newMovie->price = $comic['price'];
            $newMovie->series = $comic['series'];
            $newMovie->sale_date =$comic['sale_date'];
            $newMovie->type = $comic['type'];
            $newMovie->artists = $comic['artists'];
            $newMovie->writers = $comic['writers'];
            $newMovie->save();
        }
    }
}
