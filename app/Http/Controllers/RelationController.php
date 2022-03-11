<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RelationController extends Controller
{
    //
    public function indes ()
    {
        $user = User::all();
        return view ('welcome',compact('users'));
    }
}
