<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::create([
            'id' => 1,
            'movie_id' => 1,
            'poster' => 'one_piece.jpg',
            'user' => 'onepiece_fan',
            'rating' => '8.5',
            'date' => '2009-12-12'
        ]);
        Review::create([
            'id' => 2,
            'movie_id' => 2,
            'poster' => 'totoro.jpg',
            'user' => 'ghibli_fan',
            'rating' => '9.2',
            'date' => '1988-04-16'
        ]);
        Review::create([
            'id' => 3,
            'movie_id' => 3,
            'poster' => 'Spireted_Away.jpg',
            'user' => 'fantasi',
            'rating' => '8.6',
            'date' => '2003-07-20'
        ]);
        Review::create([
            'id' => 4,
            'movie_id' => 1,
            'poster' => 'april.jpg',
            'user' => 'anime_enthusiast',
            'rating' => '9.6',
            'date' => '2014-07-20'
        ]);
        Review::create([
            'id' => 5,
            'movie_id' => 2,
            'poster' => 'Poppy.jpg',
            'user' => 'onepiece_fan',
            'rating' => '8.5',
            'date' => '2009-12-12'
        ]);
    }
}
