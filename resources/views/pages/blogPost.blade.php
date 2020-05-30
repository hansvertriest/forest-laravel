@extends('pageLayout')

@section('document-title')
    Forest | {{$title}}
@endsection

@section('header')
	@include('partials/navigation', ["page" => $title])
@endsection

@section('title')
	
@endsection

@section('content')
	<div class="blog-post-content">
		<img src="{{asset('/image-uploads/'.$imagename)}}"" alt="">

		<p class="blog-post-title">{{$title}}</p>
		<p class="blog-post-intro">{{$intro}}</p>
		{!!$text!!}
	</div>
@endsection