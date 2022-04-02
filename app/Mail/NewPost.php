<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewPost extends Mailable
{
    use Queueable, SerializesModels;

    public $postSubscribers;

    public $post;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($postSubscribers, $post)
    {
        $this->postSubscribers = $postSubscribers;
        $this->post = $post;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.new_post');
    }
}