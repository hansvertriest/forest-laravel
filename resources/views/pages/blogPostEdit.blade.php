@extends('pageLayout')


@section('scripts')
	<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
      tinymce.init({
		selector: '#editor',
	  });
    </script>
@endsection

@section('document-title')
    Forest | Story Editor
@endsection

@section('title')
	  @if(isset($title) && $title !== '')
    	edit story
	  @else
	  	create new story
	  @endif
@endsection

@section('content')
	<form class="custom-page-edit__form" method="post" enctype="multipart/form-data">
		@csrf
		<select name="language" id="language-selector" >
			<option value="nl" @if(isset($_COOKIE['language']) && $_COOKIE['language'] === "nl") selected="selected" @endif>NL</option>
			<option value="en" @if(isset($_COOKIE['language']) && $_COOKIE['language'] === "en") selected="selected" @endif>EN</option>
		</select>
		<label for="image"></label>
		<input type="file" name="image" id="image">
		<label for="title">Title</label>
		<input type="text" id="title" name="title" value="{{$title ?? ''}}">
		<label for="intro">Intro</label>
		<textarea name="intro" id="intro" cols="30" rows="10" spellcheck >{{$intro ?? ''}}</textarea>
		<label for="editor">Content</label>
		<textarea name="text" id="editor" cols="30" rows="10" >{{$text  ?? ''}}</textarea>
		<button type="submit" class="primary-button">Publish</button>
	</form>
@endsection 