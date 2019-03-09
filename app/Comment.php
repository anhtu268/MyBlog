<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'content',
        'parent_id',
        'article_id',
        'user_id',
    ];

    public function childs()
    {
    	return $this->hasMany('App\Comment','parent_id');
    }

    public function parent()
    {
    	return $this->belongsTo('App\Comment','parent_id');
    }

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function post()
    {
    	return $this->belongsTo('App\Post');
    }
}
