<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Proxy\PostCachedRepository;
use App\Proxy\PostRepositoryInterface;

class AppServiceProvider extends ServiceProvider
{
    

    public function register()
    {
        $this->app->bind(PostRepositoryInterface::class, PostCachedRepository::class);
        // $this->app->bind(PostRepositoryInterface::class, PostCachedRepository::class);
    }


    public function boot()
    {
        // $this->app->bind('PostRepositoryInterface', function () {
        //     return new PostCachedRepository();
        // });
        // $this->app->bind('FileStorageInterface', 'S3FileStorage');
       
    }
}
