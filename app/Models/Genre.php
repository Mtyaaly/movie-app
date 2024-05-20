<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $genres = [
        [
            'id' => 1,
            'nama' => 'One Piece ',
            'description' => 'One Piece mengisahkan petualangan seorang bajak laut bernama Monkey D. Luffy dan krunya dalam mencari harta karun legendaris bernama One Piece. Mereka membentuk ikatan persahabatan yang kuat dalam perjalanan mereka. '
        ],
        [
            'id' => 2,
            'nama' => 'Sword Art Online ',
            'description' => 'Sword Art Online mengisahkan petualangan seorang pemain game bernama Kirito yang terperangkap di dalam dunia virtual reality yang berbahaya. Dia bersama dengan teman-temannya berusaha untuk menyelesaikan permainan dan keluar dari perangkap tersebut. '
        ],
        [
            'id' => 3,
            'nama' => 'The Seven Deadly Sins  ',
            'description' => 'The Seven Deadly Sins mengikuti petualangan tujuh ksatria legendaris yang disebut The Seven Deadly Sins. Mereka berusaha untuk mengalahkan para musuh yang kuat dan mengembalikan perdamaian ke kerajaan Liones. '
        ],
        [
            'id' => 4,
            'nama' => 'Fairy Tail ',
            'description' => 'Fairy Tail mengikuti kisah sekelompok penyihir muda dari guild Fairy Tail yang melakukan berbagai misi petualangan. Mereka menghadapi berbagai tantangan dan musuh, sambil memperkuat ikatan persahabatan mereka. '
        ],
        [
            'id' => 5,
            'nama' => 'Hunter x Hunter ',
            'description' => 'Hunter x Hunter mengikuti petualangan seorang bocah bernama Gon Freecss yang ingin menjadi Hunter, seseorang yang berpetualang, menemukan harta karun, dan menaklukkan monster. Dia bertemu dengan berbagai teman dan musuh dalam perjalanannya. '
        ],
    ];

    public function getAllgenres()
    {
        return $this->genres;
    }
}
