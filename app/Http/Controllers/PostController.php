<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }
    public function create()
    {
        return view('post');
    }
    public function store(Request $request)
    {
        $post = new Post;
        $post->title = $request->get('title');
        $post->body = $request->get('body');

        $post->save();

        return redirect('posts');

    }
    public function index()
    {
        $posts = Post::all();

        return view('dod', compact('posts'));
    }
    public function deletePost($id)
    {
        DB::delete('DELETE FROM posts WHERE id = ?', [$id]);

        return redirect('posts');
    }
}
