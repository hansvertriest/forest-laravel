<?php

namespace App\Http\Controllers;

use App\BlogPost;
use App\CustomPage;
use App\LandingPage;
use App\PageName;
use App\Donation;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
	
	public function getIndex(Request $r)
    {
		$language = $r->cookie('language') ?? 'en';
		$landingpage = LandingPage::where('language', $language)->first();
		$page_names = PageName::where('language', $language)->first();
		$custom_pages = CustomPage::where('language', $language)->get() ?? [];
		$donations = Donation::where('public', 1)->orderBy('created_at', 'desc')->paginate(3);

		if($landingpage === null) {
			$landingpage = LandingPage::where('language', 'en')->first();
		}
		$news = BlogPost::where('language', $language)->orderBy('created_at', 'desc')->paginate(3) ?? [];

		$data = [
			'text' => $landingpage,
			'news' => $news,
			'language' => $language,
			'titles' => $page_names,
			'custom_pages' => $custom_pages,
			'donations' => $donations,
		];
        return view('pages/home', $data);
	}

	public function getEdit(Request $r)
    {
		$landingpage = LandingPage::where('language', $r->language ?? 'en')->first();
		$page_names = PageName::where('language', $r->language)->first();

		if ($landingpage === null) {
			$landingpage = [ 'language' => $r->language];
		}

        return view('pages/homeEdit', ["language" =>$r->language, "text" => $landingpage, "page_names" => $page_names]);
	}

	public function postEdit(Request $r)
    {
		$language = $r->cookie('language') ?? 'en';
		$landingpage = LandingPage::where('language', $language)->first();

		if ($landingpage !== null) {
			// update model
			foreach ($r->input() as $key => $value) {
				if ($key !== "_token") {
					$landingpage[$key] = $value;
				}
			}
			$landingpage->save();
		} else {
			$new_landingpage = new LandingPage();
			foreach ($r->input() as $key => $value) {
				if ($key !== "_token") {
					$new_landingpage->language = $r->input()['language'];
					$new_landingpage[$key] = $value;
				}
			}
			$new_landingpage->save();
			$landingpage = $new_landingpage;
		}

        return view('pages/homeEdit', $landingpage);
	}

	public function postPageNames(Request $r)
	{
		$input = $r->input();
		$language = $r->cookie('language') ?? 'en';

		$page_name = PageName::where('language', $language)->first();

		if($page_name) {
			foreach ($input as $key => $value) {
				if ($key !== "_token") {
					$page_name[$key] = $value;
				}
			}
		} else {
			$new_page_name = new PageName();
			foreach ($input as $key => $value) {
				if ($key !== "_token") {
					$new_page_name->language = $r->input()['language'];
					$new_page_name[$key] = $value;
				}
			}
			$page_name = $new_page_name;
		}
		$page_name->save();

		$landingpage = LandingPage::where('language', $language)->first();
		return view('pages/homeEdit', ["language" =>$language, "text" => $landingpage, "page_names" => $page_name]);
	}
}