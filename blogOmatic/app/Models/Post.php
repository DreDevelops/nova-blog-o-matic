<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Spatie\Tags\HasTags;


class Post extends Model
{
    use HasFactory;
    use HasTags;

    public function likes()
    {
    	return $this->hasMany('Like');
    }

    public function comments()
    {
    	return $this->belongsToMany('Comment', 'posts_comments', 'post_id', 'comment_id');
    }

    public function user()
    {
    	return $this->belongsTo('User');
    }

    public function favorites()
    {
        return $this->hasMany('Favorite');
    }

}
