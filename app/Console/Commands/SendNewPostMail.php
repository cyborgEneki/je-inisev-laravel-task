<?php

namespace App\Console\Commands;

use App\Jobs\ScheduleNewPostMail;
use App\Models\Post;
use Illuminate\Console\Command;

class SendNewPostMail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'inisev:send-new-post-mail {postSubscribers} {post}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send an email to all website subscribers when a post is create on the site';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $postSubscribers = $this->argument('postSubscribers');

        $postId = $this->argument('post');
        $post = Post::find($postId);

        dispatch(new ScheduleNewPostMail($postSubscribers, $post));
    }
}
