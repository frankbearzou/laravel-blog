<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Repositories\PostRepository;
use App\Post;

class PostsController extends Controller
{
    protected $posts;
    public function __construct(PostRepository $posts)
    {
        $this->middleware('auth')->except(['index', 'show']);
        $this->posts = $posts;
    }

    public function index()
    {
        $posts = $this->posts->all();

        return view('posts.index', compact('posts'));
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function create()
    {
        return view('blog.create');
    }

    public function store()
    {
        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required',
        ]);

        Post::create([
            'title' => request('title'),
            'body' => request('body'),
            'user_id' => auth()->id()
        ]);
        return redirect('/posts');
    }
}
