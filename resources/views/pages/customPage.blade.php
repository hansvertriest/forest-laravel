@extends('pageLayout')

@section('document-title')
    Forest | {{$title}}
@endsection

@section('header')
	@include('partials/navigation', ["page" => $title])
@endsection

@section('title')
	{{$title}}
@endsection

@section('content')
	<div class="custom-page-content">
		@if($intro !== '')
		<p class="custom-page-intro">{{$intro}}</p>
		@endif
		{!! $content !!}
	</div>
	
@endsection