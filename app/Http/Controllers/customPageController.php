<?php

namespace App\Http\Controllers;

use App\CustomPage;
use App\PageName;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class customPageController extends Controller
{

	public function getPage(Request $r, $slug)
    {
		$language = $r->cookie('language') ?? 'en';
		$page = CustomPage::where('slug', $slug)->first() ?? [];
		$page_names = PageName::where('language', $language)->first();
		$custom_pages = CustomPage::where('language', $language)->get() ?? [];
		return view('pages/customPage', ["page" => $page, 'titles' => $page_names, 'custom_pages' => $custom_pages]);
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
			$page->language = $input['language'];
			$page->title = $input['title'];
			$page->intro = $input['intro'];
			$page->content = $input['content'];
			$page->slug = Str::slug($input['title'], '-');
			$page->save();
		} else {
			$new_page = new CustomPage();
			$new_page->language = $input['language'];
			$new_page->title = $input['title'];
			$new_page->intro = $input['intro'];
			$new_page->content = $input['content'];
			$new_page->slug = Str::slug($input['title'], '-');
			$new_page->save();
		}

		$slug = Str::slug($input['title'], '-');

		return redirect(route('admin.pages', $slug));
	}
}
