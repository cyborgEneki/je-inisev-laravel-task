<?php

namespace App\Repositories;

use App\Interfaces\PostRepositoryInterface;
use App\Models\Post;

class PostRepository implements PostRepositoryInterface
{
    public function store($data)
    {
        return Post::create($data);
    }
}
