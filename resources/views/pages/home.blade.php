<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>
	<?php 
		// if(isset($_COOKIE["language"])) {
		// 	header('/?language=' . $_COOKIE["language"]);
		// }
		if(isset($_GET["language"])) {
			setcookie ( "language", $_GET["language"]);
		}
	?>
	@include('partials.navigation', ["page" => "home"])
	<div class="page-container" id="page-container">
		<section id="page-0">
			<div class="page-content">
				<div class="page-0__overlay">
					<div class="overlay__title">
						<p>{{$home_title}}</p>
						<img src="{{asset('images/forest-icon.svg')}}" alt="">
					</div>
					<p class="overlay__subtitle">{{$home_subtitle}}</p>
					<div class="overlay__store-buttons" >
						<img src="{{asset('images/googleplay.png')}}" alt="">
						<img src="{{asset('images/appstore.png')}}" alt="">
					</div>
					<div class="newsletter-subscribe">
						<p class="newsletter-subscribe__label">{{$home_newsletter_text}}</p>
						<form >
							<button class="primary-button">{{$home_subscribe_button}}</button>
							<input class="newsletter-subscribe__input" type="text" placeholder="{{$home_newsletter_placeholder}}">
						</form>
					</div>
				</div>
			</div>
		</section>
		<section id="page-1">
		2
		</section>
		<section id="page-2">
			<div class="page-content">
			<h1>news</h1>
				@include('partials.newsPreview', [
					"title" => "A THOUSAND new trees planted last month!",
					"text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas montes, senectus nisl, consectetur purus purus pellentesque pretium libero. Aliquet viverra elit laoreet pellentesque scelerisque.",
					"date" => "25 - 5 - 2020",
					"img" => "images/landing.jpg"
				])
				
				@include('partials.newsPreview', [
					"title" => "A THOUSAND new trees planted last month!",
					"text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas montes, senectus nisl, consectetur purus purus pellentesque pretium libero. Aliquet viverra elit laoreet pellentesque scelerisque.",
					"date" => "25 - 5 - 2020",
					"img" => "images/landing.jpg"
				])
				<a href="{{ route('home')}}"><button class="secondary-button">{{$news_all_stories_button}}</button></a>
			</div>
		</section>
		<section id="page-3">
			<div class="page-content">
				<h1>Donations</h1>
				<a href="{{ route('home')}}"><button class="primary-button">{{$donations_donate_btn}}</button></a>
				@include('partials.donationCard', [
					"name" => "Jan De Meyer",
					"msg" => "Deze app heeft er voor gezorgd dat ik er door was op wiskunde. Zeker de donatiee waard dus!",
					"amount" => "30",
				])
				
				@include('partials.donationCard', [
					"name" => "Jan De Meyer",
					"msg" => "Deze app heeft er voor gezorgd dat ik er door was op wiskunde. Zeker de donatiee waard dus!",
					"amount" => "30",
				])
				<a href="{{ route('home')}}"><button class="secondary-button">{{$donations_overview_btn}}</button></a>
			</div>
		</section>
		
		<section id="page-4">
			<div class="page-content">
				<h1>Contact</h1>
				<form>
					<div class="contact-email">
						<label for="email">{{$contact_email_label}}</label>
						<input type="text" name="email" placeholder="{{$contact_email_placeholder}}">
					</div>
					
					<div class="contact-subject">
						<label for="subject">{{$contact_subject_label}}</label>
						<input type="text" name="subject" placeholder="{{$contact_subject_placeholder}}">
					</div>
					
					<div class="contact-msg">
						<label for="msg">{{$contact_msg_label}}</label>
						<textarea name="msg" placeholder="{{$contact_msg_placeholder}}"></textarea>
					</div>
					<button type="submit" class="primary-button">{{$contact_msg_send_btn}}</button>
				</form>
				
			</div>
		</section>
	</div>

	<script src="{{ asset('js/pagescroller.js') }}"></script>
	<script src="{{ asset('js/main.js') }}"></script>
</body>
</html>