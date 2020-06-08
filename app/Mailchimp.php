<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mailchimp extends Model
{
    protected $fillable = [
		'api_key',
		'list_id'
    ];
}
