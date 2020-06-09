<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Mollie\Laravel\Facades\Mollie;

class WebhookController extends Controller
{
    public function handle(Request $request) {
        if (! $request->has('id')) {
            return;
		} 		

        $payment = Mollie::api()->payments()->get($request->id);

        if ($payment->isPaid()) {
            Log::info("Betaling is gelukt " . json_encode($payment));
        } else {
            Log::info("Mislukte betaling " . json_encode($payment));
		}
    }
}
