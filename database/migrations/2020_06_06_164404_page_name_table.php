<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PageNameTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_names', function (Blueprint $table) {
			$table->id();
		
			$table->string('language')->default('en');
			$table->string('home')->default('Home');
			$table->string('about')->default('about');
			$table->string('news')->default('news');
			$table->string('donations')->default('donations');
			$table->string('contact')->default('contact');
			$table->string('pages')->default('pages');

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
        Schema::dropIfExists('page_names');
    }
}
