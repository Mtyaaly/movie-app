<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Genreseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::create([
            'nama' => 'Fantasi ',
            'description' => 'One Piece mengisahkan petualangan seorang bajak laut bernama Monkey D. Luffy dan krunya dalam mencari harta karun legendaris bernama One Piece. Mereka membentuk ikatan persahabatan yang kuat dalam perjalanan mereka. '
        ]);

        Genre::create([
            'nama' => 'Adventure ',
            'description' => 'Sword Art Online mengisahkan petualangan seorang pemain game bernama Kirito yang terperangkap di dalam dunia virtual reality yang berbahaya. Dia bersama dengan teman-temannya berusaha untuk menyelesaikan permainan dan keluar dari perangkap tersebut. '
        ]);

        Genre::create([
            'nama' => 'Shonen  ',
            'description' => 'The Seven Deadly Sins mengikuti petualangan tujuh ksatria legendaris yang disebut The Seven Deadly Sins. Mereka berusaha untuk mengalahkan para musuh yang kuat dan mengembalikan perdamaian ke kerajaan Liones. '
        ]);

        Genre::create([
            'nama' => 'Fantasi',
            'description' => 'Fairy Tail mengikuti kisah sekelompok penyihir muda dari guild Fairy Tail yang melakukan berbagai misi petualangan. Mereka menghadapi berbagai tantangan dan musuh, sambil memperkuat ikatan persahabatan mereka. '
        ]);
                        
        Genre::create([
            'nama' => 'Fantasi',
            'description' => 'Hunter x Hunter mengikuti petualangan seorang bocah bernama Gon Freecss yang ingin menjadi Hunter, seseorang yang berpetualang, menemukan harta karun, dan menaklukkan monster. Dia bertemu dengan berbagai teman dan musuh dalam perjalanannya. '
        ]);
    }
}

