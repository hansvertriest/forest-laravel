<?php

use App\Mailchimp;
use Illuminate\Database\Seeder;

class MailchimpSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $api = new Mailchimp();
		
		$api->api_key = env('MAILCHIMP_APIKEY');
		$api->list_id = env('MAILCHIMP_LIST_ID');

		$api->save();
    }
}
