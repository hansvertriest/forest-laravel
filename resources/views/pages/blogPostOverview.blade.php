@extends('pageLayout')

@section('document-title')
    Forest | News
@endsection

@section('header')
	@include('partials/navigation', ["page" => 'news'])
@endsection

@section('title')
	News
@endsection

@section('content')
	<div class="blog-post-overview-content">
		@foreach($blog_posts as $blog_post)

		@include('partials.newsPreview', [
			"title" => $blog_post->title,
			"text" => $blog_post->intro,
			"date" => $blog_post->created_at,
			"img" => 'image-uploads/'.$blog_post->imagename,
			"slug" => $blog_post->slug,
		])
		@endforeach
	</div>
@endsection