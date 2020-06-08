@extends('pageLayout')

@section('document-title')
    Forest | subscribe
@endsection

@section('header')
	@include('partials/adminHeader')
@endsection

@section('title')
	  {{$page}}
@endsection

@section('content')
@foreach($items as $item)
	@include('partials.adminHeader', [
		"title" => $item->title,	
		"date" => $item->created_at,	
		"slug" => $item->slug,	
		"language" => $item->language,
	])
@endforeach
<a href="/custom-page-edit/new"><button class="primary-button">new</button></a>
@endsection