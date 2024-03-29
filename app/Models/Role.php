<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    // Relacion muchos a muchos.
    public function users()
    {
        return $this->belongsToMany('App\Models\User');
    }

    /** Relacion muchos a muchos de permisos y roles */
    public function permissions(){
        return $this->belongsToMany('App\Models\Permission');
    }
}
