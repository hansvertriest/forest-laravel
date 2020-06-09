@extends('pageLayout')

@section('document-title')
    Forest | News
@endsection

@section('header')
	@include('partials/navigation', ["page" => 'news', "page_names" => $titles, "pages" => $custom_pages ])
@endsection

@section('title')
{{$titles->news}}
@endsection

@section('content')
	<div class="blog-post-overview-content">
		@if(count($blog_posts) > 0 )
		@foreach($blog_posts as $blog_post)

		@include('partials.newsPreview', [
			"title" => $blog_post->title,
			"text" => $blog_post->intro,
			"date" => $blog_post->created_at,
			"img" => 'image-uploads/'.$blog_post->imagename,
			"slug" => $blog_post->slug,
		])
		@endforeach
		<div class="page-navigator">
			@if(intval($page) - 1 > 0)
			<form action="" method="get">
				<input type="text" hidden name="page" value={{intval($page) - 1}}>
				<button><</button>
			</form>
			@endif

			
			{{$page ?? 1}}

			@if(intval($page) + 1 <= $news_limit)
			<form action="" method="get">
				<input type="text" hidden name="page" value={{intval($page) + 1}}>
				<button>></button>
			</form>
			@endif
		</div>
		@else
		<p>No news stories available</p>
		@endif
	</div>
@endsection