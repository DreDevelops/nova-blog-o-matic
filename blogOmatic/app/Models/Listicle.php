<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listicle extends Model
{
    use HasFactory;

    public function listItems()
    {
    	return $this->hasMany('ListItem');
    }

    public function user()
    {
    	return $this->belongsTo('User');
    }
}
