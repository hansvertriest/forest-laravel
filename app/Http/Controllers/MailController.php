<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{

	public function postContact(Request $r) {
		$data = [
			'email' => $r->email,
			'subject' => $r->subject,
			'content' => $r->msg,
			'reply_to' => 'hansvert@student.arteveldehs.be', // admin
		];

		Mail::send('mails.contact', $data, function($message) use($r) {
			$message->bcc($r->email);
			$message->to('hansvert@student.arteveldehs.be', 'Hans Vertriest');
			$message->subject($r->subject);
		});

		return redirect(route('home'));
	}
}
