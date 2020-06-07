@extends('pageLayout')

@section('document-title')
    Forest | {{$post->title}}
@endsection

@section('header')
	@include('partials/navigation', ["page" => $post->title, "page_names" => $titles, "pages" => $custom_pages])
@endsection

@section('title')
	
@endsection

@section('content')
	<div class="blog-post-content">
		<img src="{{asset('/image-uploads/'. $post->imagename)}}"" alt="">

		<p class="blog-post-title">{{$post->title}}</p>
		<p class="blog-post-intro">{{$post->intro}}</p>
		{!!$post->text!!}
	</div>
@endsection