<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $books = Book::with('author')->get();
        
        // $data = $books->map(function($book){
        //     return [
        //        'Title' => $book->title,
        //        'Author Name' => $book->author->name,
        //     ];
        // }); 
        // return $data;

        $books = Book::with(['genres','author'])->get();
        $formattedBooks = $books->map(function($book){
            return[
                'id' => $book->id,
                'name' => $book->title,
                'author_name' => $book->author->name,
                'genres' => $book->genres->pluck('name')
            ];
        });  
        return $formattedBooks;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
