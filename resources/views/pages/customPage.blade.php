@extends('pageLayout')

@section('document-title')
    Forest | {{$page->title}}
@endsection

@section('header')
	@include('partials/navigation', ["page" => $page->title, "page_names" => $titles, "pages" => $custom_pages, "pages_dropdown" => $titles->pages])
@endsection

@section('title')
	{{$page->title}}
@endsection

@section('content')
	<div class="custom-page-content">
		@if($page->intro !== '')
		<p class="custom-page-intro">{{$page->intro}}</p>
		@endif
		{!! $page->content !!}
	</div>
	
@endsection