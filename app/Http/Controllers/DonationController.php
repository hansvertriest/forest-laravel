<?php

namespace App\Http\Controllers;

use App\CustomPage;
use App\Donation;
use App\PageName;
use Illuminate\Http\Request;
use Mollie\Laravel\Facades\Mollie;
use PDO;

class DonationController extends Controller
{

	public function getMakeDonation(Request $r) {
		$language = $r->cookie('language') ?? 'en';
		$page_names = PageName::where('language', $language)->first();
		$custom_pages = CustomPage::where('language', $language)->get() ?? [];
		return view('pages/donatePage', [
			'title' => $page_names->donate,
			'titles' => $page_names,
			"custom_pages" => $custom_pages,
			]);
	}

	public function getDonationOverview(Request $r) {
		$language = $r->cookie('language') ?? 'en';

		// navigation data
		$page_names = PageName::where('language', $language)->first();
		$custom_pages = CustomPage::where('language', $language)->get() ?? [];

		// page data
		$donations = Donation::where([
			['status', 'payed'],
			['public', 1],
		])->get();

		return view('pages/donationOverview', [
			'title' => $page_names->donations,
			'titles' => $page_names,
			"custom_pages" => $custom_pages,
			"donations" => $donations,
			]);
	}

	public function postMakeDonation(Request $r)
	{
		$input = $r->input();

		// get public val
		$public = false;
		if (isset($input['public'])) {
			$public = true;
		}

		// get string of amount
		$amount = strval($input['amount']) . '.00';

		$new_donation = new Donation();
		$new_donation->amount = $input['amount'];
		$new_donation->email = $input['email'];
		$new_donation->name = $input['name'];
		$new_donation->message = $input['message'];
		$new_donation->status = 'pending';
		$new_donation->public = $public;
		$new_donation->save();

		$payment = Mollie::api()->payments->create([
			"amount" => [
				"currency" => "EUR",
				"value" => $amount // You must send the correct number of decimals, thus we enforce the use of strings
			],
			"description" => strval($new_donation->id),
			"webhookUrl" => route('webhooks.mollie'),
			"redirectUrl" => route('donation.paymentSucces', strval($new_donation->id)),
			"metadata" => [
				"order_id" => strval($new_donation->id),
			],
		]);

		$payment = Mollie::api()->payments->get($payment->id);

		// redirect customer to Mollie checkout page
		return redirect($payment->getCheckoutUrl(), 303);
	}

	public function getSucces(Request $r, $id) {

		// update payment status
		$donation = Donation::where('id', $id)->first();
		$donation->status = 'payed';
		$donation->save();

		return redirect(route('donation.getOverview'));
	}
}
