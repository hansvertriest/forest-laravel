<?php

namespace App\Http\Controllers;

use App\CustomPage;
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

}
