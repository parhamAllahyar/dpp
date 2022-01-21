<?php

namespace App\Proxy;

use Illuminate\Support\Facades\Cache;

class PostCachedRepository implements PostRepositoryInterface
{
    private $postRepository;
    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }
    public function getTopTen()
    {
        $result =  Cache::get('posts');
        return $result;
        if (is_null($result)) {
            $result = $this->postRepository->getTopTen();
            Cache::put('posts', 'result', $seconds = 1000);
        }
      return $result;
    }
}
