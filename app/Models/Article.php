<?php

namespace App\Models;

use App\Models\Tag;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'body',
        'img'
    ];

    //many to many nel file Article
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
