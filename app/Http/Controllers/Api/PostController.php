<?php

namespace App\Http\Controllers\Api;

use App\Events\NewPost;
use App\Http\Controllers\Controller;
use App\Interfaces\PostRepositoryInterface;
use App\Models\Subscriber;
use App\Models\Website;
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

        $post = $this->repository->store($input);

        $website = Website::find($input['website_id']);

        $postSubscribers = $website->subscribers->pluck('email')->toArray();

        event(new NewPost($postSubscribers, $post));
    }
}
