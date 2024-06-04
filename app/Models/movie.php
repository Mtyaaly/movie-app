<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class movie extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'poster', 'genre_id', 'synopsis'];

    public function genre()
    {
        return $this->belongsTo(Genre::class, 'genre_id');
    }
}
