<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Task extends Model
{
    use HasFactory;

    // protected $guarded = [];
    protected $fillable = ['name'];


    // public function getNameAttribute($value)
    // {
    //     return Str::lower($value);
    // }

    // public function setNameAttribute($value){
    //     // $this->attributes['name'] = Str::lower($value);
    //     $this->attributes['name'] = Str::kebab($value);
    // }


    // protected function name() : Attribute {

    // return Attribute::make(
    //   get: fn(string $value) => Str::lower($value),

    //     );
    // }

    // protected function name() : Attribute {

    // return Attribute::make(
    //   get: fn(string $value) => Str::kebab($value),
    //   set: fn(string $value) => Str::upper($value)

    //     );
    // }


    protected function name() : Attribute {

    return Attribute::make(function($value){
     
     return Str::lower($value);

        }, function($value){

        return Str::kebab($value);

     }
        
    );
}
}
