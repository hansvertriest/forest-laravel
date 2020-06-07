<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>
	@include('partials.navigation', ["page" => "home", "page_names" => $titles, "pages" => $custom_pages])
	<div class="page-container" id="page-container">
		<section id="page-0">
			<div class="page-content">
				<div class="page-0__overlay">
					<div class="overlay__title">
						<p>{{$text->home_title}}</p>
						<img src="{{asset('images/forest-icon.svg')}}" alt="">
					</div>
					<p class="overlay__subtitle">{{$text->home_subtitle}}</p>
					<div class="overlay__store-buttons" >
						<img src="{{asset('images/googleplay.png')}}" alt="">
						<img src="{{asset('images/appstore.png')}}" alt="">
					</div>
					<div class="newsletter-subscribe">
						<p class="newsletter-subscribe__label">{{$text->home_newsletter_text}}</p>
						<form >
							<button class="primary-button">{{$text->home_subscribe_button}}</button>
							<input class="newsletter-subscribe__input" type="text" placeholder="{{$text->home_newsletter_placeholder}}">
						</form>
					</div>
				</div>
			</div>
		</section>
		<section id="page-1">
			<div class="page-content">
				<div class="page-content__about-card">
					<img src="" alt="">
					<p class="about-card__title">{{$text->about_title_one ?? ''}}</p>
					<p class="about-card__text">{{$text->about_text_one ?? ''}}</p>
				</div>
				<div class="page-content__about-card">
					<img src="" alt="">
					<p class="about-card__title">{{$text->about_title_two ?? ''}}</p>
					<p class="about-card__text">{{$text->about_text_two ?? ''}}</p>
				</div>
				<div class="page-content__about-card">
					<img src="" alt="">
					<p class="about-card__title">{{$text->about_title_three ?? ''}}</p>
					<p class="about-card__text">{{$text->about_text_three ?? ''}}</p>
				</div>
			</div>
		</section>
		<section id="page-2">
			<div class="page-content">
			<h1 class="page-title">{{$titles->news}}</h1>
				<div class="page-content__news">
					@if(count($news) > 0)
						@foreach($news as $post)
							@include('partials.newsPreview', [
								"title" => $post->title,
								"text" => $post->intro,
								"date" => $post->created_at,
								"img" => 'image-uploads/'.$post->imagename,
								"slug" => $post->slug,
							])
						@endforeach
					@else
						<p>No news stories</p>
					@endif
				</div>
				
				<div class="page-content__button-container">
					<a href="{{ route('home')}}"><button class="secondary-button">{{$text->news_all_stories_button}}</button></a>
				</div>
			</div>
		</section>
		<section id="page-3">
			<div class="page-content">
				<h1 class="page-title">{{$titles->donations}}</h1>
				<a href="{{ route('home')}}"><button class="primary-button">{{$text->donations_donate_btn}}</button></a>
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
				<div class="page-content__button-container">
					<a href="{{ route('home')}}"><button class="secondary-button">{{$text->donations_overview_btn}}</button></a>
				</div>
				
			</div>
		</section>
		
		<section id="page-4">
			<div class="page-content">
				<h1 class="page-title">{{$titles->contact}}</h1>
				<form>
					<div class="contact-email">
						<label for="email">{{$text->contact_email_label}}</label>
						<input type="text" name="email" placeholder="{{$text->contact_email_placeholder}}">
					</div>
					
					<div class="contact-subject">
						<label for="subject">{{$text->contact_subject_label}}</label>
						<input type="text" name="subject" placeholder="{{$text->contact_subject_placeholder}}">
					</div>
					
					<div class="contact-msg">
						<label for="msg">{{$text->contact_msg_label}}</label>
						<textarea name="msg" placeholder="{{$text->contact_msg_placeholder}}"></textarea>
					</div>
					<button type="submit" class="primary-button">{{$text->contact_msg_send_btn}}</button>
				</form>
				
			</div>
		</section>
	</div>

	<script src="{{ asset('js/pagescroller.js') }}"></script>
	<script src="{{ asset('js/main.js') }}"></script>
</body>
</html>