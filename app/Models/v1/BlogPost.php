<?php

namespace App\Models\v1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'title',
        'body',
        'is_published',
        'published_date',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
