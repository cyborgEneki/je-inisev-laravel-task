<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\SubscriberService;
use Validator;

class SubscriberController extends Controller
{
    public function store()
    {
        $input = request()->all();

        $validator = Validator::make($input, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|unique:subscribers',
            'website_id' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors(), 'status' => 422]);
        } else {
            (new SubscriberService())->storeNewSubscriber($input);

            return response()->json(['message' => 'success', 'status' => 200]);
        }
    }
}
