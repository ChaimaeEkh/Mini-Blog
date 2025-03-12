<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Post $post)
    {
    request()->validate(['content' => 'required|min:3']);
    $post->comments()->create([
    'content' => request('content')
    ]);
    return back(); // Redirige vers la page du post
    }
}
