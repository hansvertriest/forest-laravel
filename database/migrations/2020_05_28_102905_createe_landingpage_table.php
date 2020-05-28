<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateeLandingpageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::create('landing_pages', function (Blueprint $table) {
			$table->id();

			$table->string('language', 2);
			$table->string('home_title', 10)->default('');
			$table->string('home_subtitle', 40)->default('');
			$table->string('home_newsletter_text', 40)->default('');
			$table->string('home_newsletter_placeholder', 40)->default('');
			$table->string('home_subscribe_button', 15)->default('');

			$table->string('about_title_one', 20)->default('');
			// $table->string('about_picture_one', );
			$table->string('about_text_one', 150)->default('');
			$table->string('about_title_two', 20)->default('');
			// $table->string('about_picture_two', );
			$table->string('about_text_two', 150)->default('');
			$table->string('about_title_three', 20)->default('');
			// $table->string('about_picture_three', );
			$table->string('about_text_three', 150)->default('');

			$table->string('news_all_stories_button', 25)->default('');

			$table->string('donations_donate_btn', 15)->default('');
			$table->string('donations_overview_btn', 25)->default('');

			$table->string('contact_email_label', 20)->default('');
			$table->string('contact_email_placeholder', 50)->default('');
			$table->string('contact_subject_label', 20)->default('');
			$table->string('contact_subject_placeholder', 50)->default('');
			$table->string('contact_msg_label', 20)->default('');
			$table->string('contact_msg_placeholder', 50)->default('');
			$table->string('contact_msg_send_btn', 15)->default('');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
