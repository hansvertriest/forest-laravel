<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomPage extends Model
{
    protected $fillable = [
		'language',
		'title',
		'slug',
		'intro',
		'content',
	];
}
