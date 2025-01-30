<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function author()
    {
        return $this->belongsTo(Author::class);
    }
    public function genres()
    {
        return $this->belongsToMany(Genre::class, 'book_genre');
    }
    public function publisher()
    {
        return $this->belongsTo(Publisher::class); 
    }

    public function user()
    {
        return $this->belongsTo(User::class);  
    }

}
