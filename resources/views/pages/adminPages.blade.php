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
@foreach($items as $item)
	@include('partials.adminListItem', [
		"title" => $item->title,	
		"date" => $item->created_at,	
		"slug" => $item->slug,	
		"language" => $item->language,
		"edit_href" => "/custom-page-edit",
		"delete_href" => "/admin/delete-page",
		"item_href" => "/page"
	])
@endforeach
	<div class="btn-center-container">
		<a href="/custom-page-edit/new"><button class="primary-button">new</button></a>
	</div>
@endsection