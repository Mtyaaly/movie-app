<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $reviews = [
            [
                'id' => 1,
                'movie' => 'One Piece',
                'poster' => 'one_piece.jpg',
                'user' => 'onepiece_fan',
                'rating' => '8,5',
                'date' => '2009-12-12'
            ],
            [
                'id' => 2,
                'movie' => 'My Neighbor Totoro  ',
                'poster' => 'totoro.jpg',
                'user' => 'ghibli_fan',
                'rating' => '9.2',
                'date' => '1988-04-16'
            ],
            [
                'id' => 3,
                'movie' => 'Spireted Away ',
                'poster' => 'Spireted_Away.jpg',
                'user' => 'fantasi',
                'rating' => '8,6 ',
                'date' => '2003-07-20 '
            ],
            [
                'id' => 4,
                'movie' => 'Your Lie in April ',
                'poster' => 'april.jpg',
                'user' => 'anime_enthusiast ',
                'rating' => '9,6 ',
                'date' => '2014-10-14  '
            ],
            [
                'id' => 5,
                'movie' => 'From Up on Poppy Hill  ',
                'poster' => 'Poppy.jpg',
                'user' => 'ghibli_lover ',
                'rating' => '8,0 ',
                'date' => '2011-07-16 '
            ],
        ];
    
        public function getAllreviews()
        {
            return $this->reviews;
        }
    }

