<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class NewController extends Controller
{
    public function index()
    {
        $posts = User::get();
        return view('posts.index',compact('posts'));
    }
}
