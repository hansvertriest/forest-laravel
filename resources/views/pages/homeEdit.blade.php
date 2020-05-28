<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>
	@include('partials.homeEditHeader', ["page" => "home"])
	@if(isset($language))
	<div  class="page-container" id="page-container">
		<section id="page-0">
			
			<div class="page-content">
				<div class="page-0__overlay">
					<div class="overlay__title">
						<p>
							<input onchange="addToHiddenForm(event)" type="text" id = "home_title" name="home_title" value="{{$home_title ?? ''}} ">
						</p>
						<img src="{{asset('images/forest-icon.svg')}}" alt="">
					</div>
					<p class="overlay__subtitle">
						<input onchange="addToHiddenForm(event)" type="text" name="home_subtitle" value="{{$home_subtitle ?? ''}} ">
					</p>
					<div class="overlay__store-buttons" >
						<img src="{{asset('images/googleplay.png')}}" alt="">
						<img src="{{asset('images/appstore.png')}}" alt="">
					</div>
					<div class="newsletter-subscribe">
						<p class="newsletter-subscribe__label">
							<input onchange="addToHiddenForm(event)" type="text" name="home_newsletter_text" value="{{$home_newsletter_text ?? ''}} ">
						</p>
						<form >
								<input type="text" onchange="addToHiddenForm(event)" name="home_subscribe_button" value="{{$home_subscribe_button ?? ''}} ">
								<input type="text" onchange="addToHiddenForm(event)" name="home_newsletter_placeholder" value="{{$home_newsletter_placeholder ?? ''}} ">
						</form>
					</div>
				</div>			
			</form>
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
				<input type="text" onchange="addToHiddenForm(event)" name="news_all_stories_button" value="{{$news_all_stories_button ?? ''}} ">
			</div>
		</section>
		<section id="page-3">
			<div class="page-content">
				<h1>Donations</h1>
				<input type="text" onchange="addToHiddenForm(event)" name="donations_donate_btn" value="{{$donations_donate_btn ?? ''}} ">
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
				<input type="text" onchange="addToHiddenForm(event)" name="donations_overview_btn" value="{{$donations_overview_btn ?? ''}} ">
			</div>
		</section>
		
		<section id="page-4">
			<div class="page-content">
				<h1>Contact</h1>
				<form>
					<div class="contact-email">
						<label for="email">
						<input type="text" onchange="addToHiddenForm(event)" name="contact_email_label" value="{{$contact_email_label ?? ''}} ">
						</label>
								<input type="text" onchange="addToHiddenForm(event)" name="contact_email_placeholder" value="{{$contact_email_placeholder ?? ''}} ">
						<!-- <input type="text" name="email" placeholder="{{$contact_email_placeholder ?? ''}}"> -->
					</div>
					
					<div class="contact-subject">
						<label for="subject">
								<input type="text" onchange="addToHiddenForm(event)" name="contact_subject_label" value="{{$contact_subject_label ?? ''}} ">
						</label>
						<form class="edit-form" action="/home-edit" method="post">
							<input type="text" onchange="addToHiddenForm(event)" name="contact_subject_placeholder" value="{{$contact_subject_placeholder ?? ''}} ">
						<!-- <input type="text" name="subject" placeholder="{{$contact_subject_placeholder ?? ''}}"> -->
					</div>
					
					<div class="contact-msg">
						<label for="msg">
						<input type="text" onchange="addToHiddenForm(event)" name="contact_msg_label" value="{{$contact_msg_label ?? ''}} ">
						</label>
						<input type="text" onchange="addToHiddenForm(event)" name="contact_msg_placeholder" value="{{$contact_msg_placeholder ?? ''}} ">
						<!-- <textarea name="msg" placeholder="{{$contact_msg_placeholder ?? ''}}"></textarea> -->
					</div>
					
					<input type="text" onchange="addToHiddenForm(event)" name="contact_msg_send_btn" value="{{$contact_msg_send_btn ?? ''}} ">
				</form>
				
			</div>
		</section>
		<button type="submit"></button>
	</div>
	@endif
	<script src="{{ asset('js/pagescroller.js') }}"></script>
	<script src="{{ asset('js/main.js') }}"></script>
</body>
</html>