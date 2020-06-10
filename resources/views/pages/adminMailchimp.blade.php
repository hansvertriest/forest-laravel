@extends('pageLayout')

@section('document-title')
    Forest Admin
@endsection

@section('header')
	@include('partials/adminHeader')
@endsection

@section('title')
	  {{$page}}
@endsection

@section('content')
	<form method="post" action="{{route('admin.postMailchimpKey')}}" class="btn-center-container">
		@csrf
		<input name="key" type="text" value="{{$key}}">
		<div class="btn-center-container">
			<a href="/blog-edit/new"><button class="primary-button">update</button></a>
		</div>
	</form>
@endsection