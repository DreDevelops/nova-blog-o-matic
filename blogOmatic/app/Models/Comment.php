<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Spatie\Tags\HasTags;

class Comment extends Model
{
    use HasFactory;
    use HasTags;

    public function user()
    {
    	return $this->belongsTo('User');
    }

    public function post()
    {
    	return $this->belongsToMany('Post', 'posts_comments', 'comment_id', 'post_id');
    }


    public function replies()
    {
    	return $this->hasMany('Comment', 'pid');
    }


    public function likes()
    {
    	return $this->belongsToMany('Like', 'likes_comments', 'comment_id', 'like_id');
    }

}
