<?php

namespace App\Listeners;

use App\Events\NewPost;
use App\Mail\NewPost as MailNewPost;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

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
        foreach($event->postSubscribers as $subscriberEmail) {
            Mail::to($subscriberEmail)->send(new MailNewPost($event->post));
        }
    }
}
