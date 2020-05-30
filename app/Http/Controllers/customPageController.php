<?php

namespace App\Http\Controllers;

use App\CustomPage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class customPageController extends Controller
{

	public function getPage($slug)
    {
		$page = CustomPage::where('slug', $slug)->first() ?? [];
		return view('pages/customPage', $page);
	}

    public function getEdit($slug)
    {
		$page = CustomPage::where('slug', $slug)->first() ?? [];
		return view('pages/customPageEdit', $page);
	}

	public function savePage(Request $r, $slug)
    {
		$input = $r->input();

		$page = CustomPage::where('slug', $slug)->first();

		if ($page) {
			$page->title = $input['title'];
			$page->intro = $input['intro'];
			$page->content = $input['content'];
			$page->slug = Str::slug($input['title'], '-');
			$page->save();
		} else {
			$new_page = new CustomPage();
			$new_page->title = $input['title'];
			$new_page->intro = $input['intro'];
			$new_page->content = $input['content'];
			$new_page->slug = Str::slug($input['title'], '-');
			$new_page->save();
		}

		$slug = Str::slug($input['title'], '-');

		return redirect(route('customPage.get', $slug));
	}
}
