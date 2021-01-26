<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Likes extends Model
{
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    public function meme()
    {
        return $this->belongsTo('App\Models\Memes');
    }
}
