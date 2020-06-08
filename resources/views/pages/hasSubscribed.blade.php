@extends('pageLayout')

@section('document-title')
    Forest | subscribe
@endsection

@section('content')
{!! $msg !!}
	<form action="/newsletter/unsubscribe" method="post">
		@csrf
		<input name="email" type="text" value="{{$email}}" hidden>
		<button>unsubscribe</button>
	</form>
	
	<a href="/">Go back home</a>
@endsection