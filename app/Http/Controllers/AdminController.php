<?php

namespace App\Http\Controllers;

use App\BlogPost;
use App\CustomPage;
use App\Donation;
use App\Mailchimp;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function getPages(Request $r)
    {
		$items = CustomPage::get();
		return view('pages/adminPages', [
			"page" => "pages",
			"items" => $items,
		]);
	}

	public function deletePage($slug)
    {
		CustomPage::where('slug', $slug)->delete();

		return redirect(route('admin.pages'));
	}

	public function getBlog(Request $r)
    {
		$items = BlogPost::get();
		return view('pages/adminBlog', [
			"page" => "blog",
			"items" => $items,
		]);
	}

	public function deleteBlog($slug)
    {
		BlogPost::where('slug', $slug)->delete();

		return redirect(route('admin.blog'));
	}

	public function getDonations() {
		$donations = Donation::get();
		return view('pages/adminDonations', [
			"page" => "donations",
			"donations" => $donations,
		]);
	}


	public function getMailchimpKey() {
		$key = Mailchimp::first();

		return view('pages/adminMailchimp', [
			"page" => "mail",
			"key" => $key->api_key,
		]);
	}

	public function postMailchimpKey(request $r) {
		$key = Mailchimp::first();
		$key->api_key = $r->key;
		$key->save();

		return redirect(route('admin.getMailchimpKey'));
	}
}
