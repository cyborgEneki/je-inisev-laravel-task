<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Interfaces\PostRepositoryInterface;
use App\Models\Subscriber;
use Illuminate\Http\Request;

class PostController extends Controller
{
    private $repository;

    public function __construct(PostRepositoryInterface $postRepository)
    {
        $this->repository = $postRepository;
    }

    public function store()
    {
        $input = request()->all();

        $this->repository->store($input);

        $postSubscribers = Subscriber::where('website_id', $input['website_id']);

        // email event
    }
}
