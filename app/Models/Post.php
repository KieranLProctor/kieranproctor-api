<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'body',
        'published_at',
    ];

    protected $casts = [
        'published_at' => 'datetime'
    ];

    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
