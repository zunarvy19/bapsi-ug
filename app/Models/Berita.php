<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Berita extends Model
{
    use HasFactory, Sluggable;

    protected $fillable = [
        'title', 'slug', 'body', 'user_id', 'excerpt', 'image'
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function dateCarbon(){
        return Carbon::parse($this->attributes['created_at'])
        -> translatedFormat('1, d F Y');
    }
}
