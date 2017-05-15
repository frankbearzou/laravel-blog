<?php

namespace App\Repositories;

use App\Post;

class PostRepository
{
    protected $posts;

    public function __construct(Post $posts)
    {
        $this->posts = $posts;
    }

    public function all()
    {
        return $this->posts->latest()->filter(request(['year', 'month']))->get();
    }
}