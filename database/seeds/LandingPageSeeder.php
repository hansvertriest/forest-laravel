<?php

use App\LandingPage;
use Illuminate\Database\Seeder;

class LandingPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		// nieuwe instantie van LandingPage-model
		$landingpage = new LandingPage();

		$landingpage->language = 'en';
		$landingpage->home_title = 'Forest';
		$landingpage->home_subtitle = 'Stay focused, be present		';
		$landingpage->home_newsletter_text = 'Subscribe to our newsletter!		';
		$landingpage->home_newsletter_placeholder = 'Your email';
		$landingpage->home_subscribe_button = 'subscribe';

		$landingpage->about_title_one = 'Plant a tree';
		// $landingpage->about_picture_one = 'en';
		$landingpage->about_text_one = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nullam tortor pharetra, massa feugiat enim, sapien.';
		$landingpage->about_title_two = 'Plant a tree';
		// $landingpage->about_picture_two = 'en';
		$landingpage->about_text_two = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nullam tortor pharetra, massa feugiat enim, sapien.';
		$landingpage->about_title_three = 'Plant a tree';
		// $landingpage->about_picture_three = 'en';
		$landingpage->about_text_three = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nullam tortor pharetra, massa feugiat enim, sapien.';

		$landingpage->news_all_stories_button = 'ALL NEWS STORIES';

		$landingpage->donations_donate_btn = 'DONATE';
		$landingpage->donations_overview_btn = 'VIEW OVERVIEW';
		$landingpage->contact_email_label = 'Email';
		$landingpage->contact_email_placeholder = 'Your email';
		$landingpage->contact_subject_label = 'Subject';
		$landingpage->contact_subject_placeholder = 'Example subject';
		$landingpage->contact_msg_label = 'Message';
		$landingpage->contact_msg_placeholder = 'Write your message...';
		$landingpage->contact_msg_send_btn = 'send';

		
        // bewaren
        $landingpage->save();
    }
}
