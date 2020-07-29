<?php

namespace App;
use App\User;

use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    public function contact() 
    {
        return $this->belongsTo(User::class);
    }
}
