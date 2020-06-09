@extends('pageLayout')

@section('document-title')
    Forest | News
@endsection

@section('header')
	@include('partials/navigation', ["page" => 'donations', "page_names" => $titles, "pages" => $custom_pages ])
@endsection

@section('title')
	{{$titles->donations}}
@endsection

@section('content')
	<div class="donate-btn-container">
		<a href="{{ route('donation.getMakeDonation')}}"><button class="primary-button">{{$titles->donate}}</button></a>
	</div>
	<div class="donation-overview-content">
		@if(count($donations) > 0)
		@foreach($donations as $donation)
			@include('partials.donationCard', [
						"name" => $donation->name,
						"msg" => $donation->message,
						"amount" => $donation->amount,
					])
		@endforeach
		@else
		<p>No news stories available</p>
		@endif
	</div>
@endsection