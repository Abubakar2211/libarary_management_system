<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $users = User::with('profile')->get();

        // $data = $users->map(function ($user) {
        //     return [
        //         $user->name,
        //         $user->email,
        //         $user->profile->bio,
        //         $user->profile->phone_number,
        //     ];
        // });

        // return $data;
        //================================================= 
        $users = User::with('publisher')->get();
        $data = $users->map(function($user){
           return[ 
                $user->name,
                $user->email,
                $user->publisher->name
            ];
        });
        return $data;

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
