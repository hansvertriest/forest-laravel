@extends('pageLayout')

@section('document-title')
    Forest | {{$title}}
@endsection

@section('header')
	@include('partials/navigation', ["page" => $title, "page_names" => $titles, "pages" => $custom_pages])
@endsection

@section('title')
	{{$title}}
@endsection

@section('content')
	<form action="{{route('donation.makeDonation')}}" method="post">
		@csrf

		<div class="donation-amount-container">
			<input class="donation-amount-container__input" type="text" name="amount" placeholder="5">
			<p class="donation-amount-container__currency">$</p>
		</div>
		<div class="donation-email">
			<label for="email">Email</label>
			<input type="text" name="email" placeholder="rob.de.banker@example.com">
		</div>
		
		<div class="donation-name">
			<label for="name">Name</label>
			<input type="text" name="name" placeholder="Rob De Banker">
		</div>
		
		<div class="donation-msg">
			<label for="message">Message</label>
			<textarea name="message" max="100" placeholder="Write a message with your doantion"></textarea>
		</div>

		<div class="donation-public">
			<label for="public">Can we show your donation on our public page?</label>
			<input type="checkbox" id="public" name="public" value="true">
		</div>

		<button type="submit" class="primary-button">{{$title}}</button>
	</form>
@endsection