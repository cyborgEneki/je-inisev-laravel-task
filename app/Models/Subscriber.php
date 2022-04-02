<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    use HasFactory;

    protected $fillable = ['first_name', 'last_name', 'email'];

    public function websites()
    {
        return $this->belongsToMany(Website::class, 'subscriber_websites');
    }
}
