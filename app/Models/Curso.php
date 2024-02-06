<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    // protected $fillable = ['name', 'description', 'category'];

    protected $guarded = [];

    protected function name(): Attribute{
        return new Attribute(
            set: fn($value) => strtolower($value),
            get: fn($value) => ucwords($value)
        );
    }

    // forma de definir un accesor en versiones anteriores
    // public function getNameAttribute($value): Attribute {
    //     return ucwords($value);
    // }

    // forma de definir un mutador en versiones anteriores
    // public function setNameAttribute($value): Attribute{
    //     $this->attributes['name'] = strtolower($value);
    // }
}
