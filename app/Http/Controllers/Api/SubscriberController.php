<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateSubscriberRequest;
use App\Interfaces\SubscriberRepositoryInterface;
use Illuminate\Http\Request;
use Validator;

class SubscriberController extends Controller
{
    private $repository;

    public function __construct(SubscriberRepositoryInterface $subscriberRepository)
    {
        $this->repository = $subscriberRepository;
    }

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
            $this->repository->store($input);

            return response()->json(['message' => 'success', 'status' => 200]);
        }
    }
}
