<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Profile;
use App\Models\Post;
use App\Models\Video;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

    // Relacion uno a muchos
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    // Relacion uno a muchos
    public function videos()
    {
        return $this->hasMany(Video::class);
    }

    // Relacion muchos a muchos
    public function roles()
    {
        return $this->belongsToMany('App\Models\Role');
    }

    // relacion 1 a 1, polimorfica.
    public function image()
    {
        return $this->morphOne('App\Models\Image', 'imageable');
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }
}
