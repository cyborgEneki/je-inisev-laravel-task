<?php

namespace App\Repositories;

use App\Interfaces\PostRepositoryInterface;
use App\Models\Post;

class PostRepository implements PostRepositoryInterface
{

    //   public function find($id){
    //     return User::find($id);
    //   }

    //   public function getAll($id){
    //     return User::all();
    //   }

    public function store($data)
    {
        return Post::create($data);
    }

    //   public function update($id, $data){
    //     return $this->find($id)->update($data);
    //   }

    //   pubilc function delete($id){
    //     User::destroy($id);
    //   }

}
