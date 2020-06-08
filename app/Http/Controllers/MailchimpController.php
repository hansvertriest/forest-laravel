<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Newsletter;

class MailchimpController extends Controller
{
    public function subscribe(Request $r)
    {
		if($r->email !== null) {
			Newsletter::subscribe($r->email);
			$msg = "<p>You're email <strong>".$r->email."</strong> is subscribed te the newsletter!</p>";
		} else {
			$msg = "<p>We couldn't subscribe your email-adres.";
		}
		
        return view('pages/hasSubscribed', ["msg" => $msg, "email" => $r->email ]);
	}

	public function unSubscribe(Request $r)
    {
		if($r->email !== null) {
			Newsletter::unsubscribe($r->email);
			$msg = "<p>You're email <strong>".$r->email."</strong> has been removed from our list!</p>";
		} else {
			$msg = "<p>We couldn't unsubscribe your email-adres.";
		}
		
        return view('pages/hasSubscribed', ["msg" => $msg, "email" => $r->email ]);
	}
}
