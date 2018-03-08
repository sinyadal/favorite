<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;

class Post extends Model
{
    protected $fillable = [
        'title', 'body'
    ];

    public function favorited()
    {
        return (bool) Favorite::where('user_id', Auth::id())
                            ->where('post_id', $this->id)
                            ->first();
    }
}
