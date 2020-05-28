<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LandingPage extends Model
{
    protected $fillable = [
        'language',
        'home_title',
        'home_subtitle',
        'home_newsletter_text',
        'home_newsletter_placeholder',
		'home_subscribe_button',
		
		'about_title_one',
		// 'picture_one',
		'about_text_one',
		'about_title_two',
		// 'picture_two',
		'about_text_two',
		'about_title_three',
		// 'picture_three',
		'about_text_three',

		'news_all_stories_button',

		'donations_donate_btn',
		'donations_overview_btn',

		'contact_email_label',
		'contact_email_placeholder',
		'contact_subject_label',
		'contact_subject_placeholder',
		'contact_msg_label',
		'contact_msg_placeholder',
		'contact_msg_send_btn',
    ];
}
