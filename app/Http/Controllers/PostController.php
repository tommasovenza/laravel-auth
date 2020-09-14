<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    
    // la funzione che mostra i post agli utenti che non sono loggati
    public function index() {

        $posts = Post::all();

        return view('guests.posts.index', compact('posts'));
    }
}
