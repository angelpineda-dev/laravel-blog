<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{

    protected $guarded  = [];
    
    use HasFactory;

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }


    // Relacion 1 a muchos polimorfica
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    // Relacion muchos a muchos polimorfica
    public function tags(){
        return $this->morphToMany(Tag::class,'taggable');
    }
}
