<?php

namespace App\Services;

use App\Models\Subscriber;

class SubscriberService
{
    public function storeNewSubscriber($data)
    {
        $subscriber = Subscriber::create($data);
        $websites = $data['website_id'];

        $subscriber->websites()->attach($websites);

        return true;
    }
}
