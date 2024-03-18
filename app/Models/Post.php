<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Category;

class Post extends Model
{
    use HasFactory;

    // Relacion uno a muchos inversa
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relacion uno a muchos inversa
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // relacion 1 a 1, polimorfica.
    public function image(){
        return $this->morphOne('App\Models\Image', 'imageable');
    }

    // Relacion 1 a muchos polimorfica
    public function comments(){
        return $this->morphMany(Comment::class, 'commentable');
    }

    // Relacion muchos a muchos polimorfica
    public function tags(){
        return $this->morphToMany(Tag::class,'taggable');
    }
}
