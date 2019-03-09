<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $fillable = [
		'title',
		'content',
		'author_id',
	]; 

	public function author()
	{
		return $this->belongsTo('App\User');
	}   

	public function comments()
	{
		return $this->hasMany('App\Comment');
	}
}
