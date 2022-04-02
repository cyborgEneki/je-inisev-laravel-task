<?php

namespace App\Listeners;

use App\Console\Commands\SendNewPostMail;
use App\Events\NewPost;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Artisan;

class SendNewPostEmail implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\SendNewPostEmail  $event
     * @return void
     */
    public function handle(NewPost $event)
    {
        Artisan::call(SendNewPostMail::class, ['postSubscribers' => $event->postSubscribers, 'post' => $event->post->id]);
    }
}
