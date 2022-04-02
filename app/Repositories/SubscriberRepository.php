<?php

namespace App\Repositories;

use App\Interfaces\SubscriberRepositoryInterface;
use App\Models\Subscriber;

class SubscriberRepository implements SubscriberRepositoryInterface
{
    public function store($data)
    {
        $subscriber = Subscriber::create($data);
        $websites = $data['website_id'];

        $subscriber->websites()->attach($websites);

        return true;
    }
}
