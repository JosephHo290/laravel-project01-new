<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function comments()
	{
		return $this->hasMany('App\Models\Comment');
	}
	protected $fillable = [
	'title',
	'sub_title',
	'content',
	'is_feature',
	'page_view'];
	protected $guarded = ['id'];
}
