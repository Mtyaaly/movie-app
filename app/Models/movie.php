<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class movie extends Model
{
    use HasFactory;

    protected $movies = [
        [
            'id' => 1,
            'title' => 'Jojo Bizzare Adventure',
            'poster' => 'movie-01.jpg',
            'genre' => 'Shounen',
            'synopsis' => 'Jojo Bizzare Adventure is a story about the Joestar family'
        ],
        [
            'id' => 2,
            'title' => 'Noragami ',
            'poster' => 'movie-02.jpg',
            'genre' => 'Drama',
            'synopsis' => 'Noragami is an anime series that follows a poor deity named Yato'
        ],
        [
            'id' => 3,
            'title' => 'Wind Breaker ',
            'poster' => 'movie-03.jpg',
            'genre' => 'Action ',
            'synopsis' => 'Haruka Sakura wants nothing to do with weaklings—he s only interested in the strongest of the strong. '
        ],
    ];

    public function getAllmovies()
    {
        return $this->movies;
    }
}
