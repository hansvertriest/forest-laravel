@extends('pageLayout')

@section('document-title')
    Forest | subscribe
@endsection

@section('header')
	@include('partials/adminHeader')
@endsection

@section('title')
	  {{$page}}
@endsection

@section('content')

<div class="admin-donations-container">
	@if(count($donations) > 0)
	@foreach($donations as $donation)
		<div class="donation-card">
			<div class="container">
				<div class="donation-card__text">
					<p class="donation-card-text__name">{{$donation->name}}</p>
					<p class="donation-card-text__msg">{{$donation->message}}</p>
					<p class="donation-card-text__status">{{$donation->status}}</p>
					<p class="donation-card-text__status">Public: {{$donation->public}}</p>
				</div>
				<p class="donation-card__amount">$ {{$donation->amount}}</p>
			</div>
			<div class="donation-card__divider"></div>
		</div>
	@endforeach
	@else
	<p>No news stories available</p>
	@endif
</div>
		
@endsection