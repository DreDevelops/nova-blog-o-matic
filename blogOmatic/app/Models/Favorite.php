<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
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
}
