<?php

namespace App\Proxy;

use App\Models\Post;

class PostRepository implements PostRepositoryInterface
{
    public function getTopTen()
    {
        return Post::all();
    }
}
