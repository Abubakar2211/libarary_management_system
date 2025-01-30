<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    public function books()
    {
        return $this->belongsToMany(Book::class, 'book_genre');
    }
    public function users(){
        return $this->hasManyThrough(User::class,Book::class,'genre_id','id','id','book_id')->distinct();
    }
    
}
