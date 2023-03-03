<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class FollowerController extends Controller
{
    public function store(User $user) //muchos a muchos
    {
        $user->followers()->attach(auth()->user()->id);
        return back();
    }

    public function destroy(User $user) //muchos a muchos
    {
        $user->followers()->detach(auth()->user()->id);
        return back();
    }
}
