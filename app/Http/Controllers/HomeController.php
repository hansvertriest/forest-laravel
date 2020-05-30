<?php

namespace App\Http\Controllers;

use App\LandingPage;
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
		$language = $r->cookie('language') ?? $r->language;
		$landingpage = LandingPage::where('language', $language ?? 'en')->first();
        return view('pages/home', $landingpage);
	}

	public function getEdit(Request $r)
    {
		$landingpage = LandingPage::where('language', $r->language ?? 'en')->first();

		if ($landingpage === null) {
			$landingpage = [ 'language' => $r->language];
		}

        return view('pages/homeEdit', $landingpage);
	}

	public function postEdit(Request $r)
    {
		// dd($r->input()['home_title']);
		// find model 
		$landingpage = LandingPage::where('language', $r->input()['language'])->first();

		if ($landingpage !== null) {
			// update model
			foreach ($r->input() as $key => $value) {
				if ($key !== "_token") {
					// dd($key);
					$landingpage[$key] = $value;
				}
			}
			$landingpage->save();
		} else {
			$new_landingpage = new LandingPage();
			foreach ($r->input() as $key => $value) {
				if ($key !== "_token") {
					// dd($key);
					$new_landingpage->language = $r->input()['language'];
					$new_landingpage[$key] = $value;
				}
			}
			$new_landingpage->save();
			$landingpage = $new_landingpage;
		}

        return view('pages/homeEdit', $landingpage);
	}
}
