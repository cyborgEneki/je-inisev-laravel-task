<?php

namespace App\Jobs;

use App\Mail\NewPost;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class ScheduleNewPostMail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $postSubscribers;

    protected $post;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($postSubscribers, $post)
    {
        $this->postSubscribers = $postSubscribers;
        $this->post = $post;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        foreach($this->postSubscribers as $subscriberEmail) {
            Mail::to($subscriberEmail)->send(new NewPost($this->post));
        }
    }
}
