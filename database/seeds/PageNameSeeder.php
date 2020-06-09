<?php

use App\PageName;
use Illuminate\Database\Seeder;

class PageNameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$page_names_en = new PageName();
		
		$page_names_en->language = 'en';
		$page_names_en->home = 'Home';
		$page_names_en->about = 'About';
		$page_names_en->news = 'News';
		$page_names_en->donations = 'Donations';
		$page_names_en->donate = 'Donate';
		$page_names_en->contact = 'Contact';
		$page_names_en->pages = 'Pages';
		$page_names_en->save();

		$page_names_nl = new PageName();
		$page_names_nl->language = 'nl';
		$page_names_nl->home = 'Home';
		$page_names_nl->about = 'Over';
		$page_names_nl->news = 'Nieuws';
		$page_names_nl->donations = 'Donaties';
		$page_names_nl->donate = 'Doneer';
		$page_names_nl->contact = 'Contact';
		$page_names_nl->pages = 'Pages';
		$page_names_nl->save();
    }
}
