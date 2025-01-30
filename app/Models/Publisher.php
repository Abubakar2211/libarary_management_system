<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    public function books(){
        return $this->hasOne(Book::class);
    }
    public function ManyBook(){
        return $this->hasMany(Book::class);
    }
    public function users()
    {
        return $this->hasManyThrough(
        User::class,Book::class,'publisher_id', 'id','id','user_id' 
        );
    }
}
