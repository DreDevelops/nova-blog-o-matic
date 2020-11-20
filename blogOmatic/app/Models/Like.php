<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;

    public function post()
    {
    	return $this->belongsTo('Post');
    }

    public function user()
    {
    	return $this->belongsTo('User');
    }

    public function comment()
    {
    	return $this->belongsToMany('Comment', 'likes_comments', 'like_id', 'comment_id');
    }


}
