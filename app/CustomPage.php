<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomPage extends Model
{
    protected $fillable = [
		'title',
		'slug',
		'intro',
		'content',
	];
}
