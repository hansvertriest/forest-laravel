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
		$landingpage->about_text_one = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nullam tortor pharetra, massa feugiat enim, sapien.';
		$landingpage->about_title_two = 'Plant a tree';
		$landingpage->about_text_two = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nullam tortor pharetra, massa feugiat enim, sapien.';
		$landingpage->about_title_three = 'Plant a tree';
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

		// nieuwe instantie van LandingPage-model
		$landingpage_nl = new LandingPage();

		$landingpage_nl->language = 'nl';
		$landingpage_nl->home_title = 'Forest';
		$landingpage_nl->home_subtitle = 'Blijf gefocust, wees aanwezig';
		$landingpage_nl->home_newsletter_text = 'Schrijf je in voor de nieuwsbrief!';
		$landingpage_nl->home_newsletter_placeholder = 'Uw e-mail adres';
		$landingpage_nl->home_subscribe_button = 'Schrijf in';

		$landingpage_nl->about_title_one = 'Plant een boom';
		$landingpage_nl->about_text_one = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nullam tortor pharetra, massa feugiat enim, sapien.';
		$landingpage_nl->about_title_two = 'Concentreer je';
		$landingpage_nl->about_text_two = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nullam tortor pharetra, massa feugiat enim, sapien.';
		$landingpage_nl->about_title_three = 'Laat het niet sterven';
		$landingpage_nl->about_text_three = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nullam tortor pharetra, massa feugiat enim, sapien.';

		$landingpage_nl->news_all_stories_button = 'Alle verhalen';

		$landingpage_nl->donations_donate_btn = 'Doneer';
		$landingpage_nl->donations_overview_btn = 'Alle donaties';
		$landingpage_nl->contact_email_label = 'E-mail';
		$landingpage_nl->contact_email_placeholder = 'Uw e-mail';
		$landingpage_nl->contact_subject_label = 'Onderwerp';
		$landingpage_nl->contact_subject_placeholder = 'Voorbeeld van een onderwerp';
		$landingpage_nl->contact_msg_label = 'Bericht';
		$landingpage_nl->contact_msg_placeholder = 'Schrijf je bericht...';
		$landingpage_nl->contact_msg_send_btn = 'Verzend';
		
		// bewaren
		$landingpage_nl->save();
		
		
    }
}
