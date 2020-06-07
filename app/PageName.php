<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PageName extends Model
{
	protected $fillable = [
		'language',
		'home',
		'about',
		'news',
		'donations',
		'contact',
		'pages',
	];
}
