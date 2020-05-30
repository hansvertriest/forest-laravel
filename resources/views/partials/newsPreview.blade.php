<div class="news-preview">
	<div class="news-preview__img">
		<img src="{{asset($img)}}" alt="">
	</div>
	<div class="news-preview__content">
		<p class="news-preview__title">{{$title}}</p>
		<p class="news-preview__text">{{$text}}</p>
		<div>
			<p class="date">Published {{$date}}</p>
			<a href="/blog/{{$slug}}"><button class="primary-button">read more</button></a>
		</div>
	</div>
</div>