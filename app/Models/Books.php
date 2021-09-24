<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;
    protected $table = 'books';
    protected $casts = [
        'id' => 'array',
        'authors' => 'array',
        'title' => 'array',
        'subtitle' => 'array',
        'thumbnail' => 'array',
        'smallThumbnail' => 'array',
    ];
    protected $fillable = [
        'id',
        'authors',
        'title',
        'subtitle',
        'thumbnail',
        'smallThumbnail',
    ];
}
