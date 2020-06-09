
<div class="nav-container">
	<div class="nav">
		<a href="{{route('home')}}" class="nav__logo">
			<p>Forest</p>
			<img src="{{asset('images/forest-icon.svg')}}" alt="">
		</a>
		<div class="nav__buttons">
			<a href="{{ route('home')}}" @if($page === 'home') class="nav__buttons--focused" @endif>{{$page_names->home}}</a>
			<a href="{{ route('home') . '#page-1' }}" @if($page === 'about') class="nav__buttons--focused" @endif>{{$page_names->about}}</a>
			<a href="{{ route('blogPost.getOverview') }}" @if($page === 'news') class="nav__buttons--focused" @endif>{{$page_names->news}}</a>
			<a href="{{ route('donation.getOverview') }}" @if($page === 'donations') class="nav__buttons--focused" @endif>{{$page_names->donations}}</a>
			<a href="{{ route('home') . '#page-4'}}" @if($page === 'contact') class="nav__buttons--focused" @endif>{{$page_names->contact}}</a>
			<div class="dropdown">
				<button class="dropbtn">{{$titles->pages}}</button>
				<div class="dropdown-content">
					@foreach($pages as $page)
						<a href="{{route('customPage.get', $page->slug)}}">{{$page->title}}</a>
					@endforeach
				</div>
			</div> 
			
		</div>
	</div>
	<form action="/api/cookie" id="language-form">
		<input type="text" hidden name="route" value="{{$_SERVER['REQUEST_URI']}}">
		<select name="language" id="language-selector" >
			<option value="nl" @if(isset($_COOKIE['language']) && $_COOKIE['language'] === "nl") selected="selected" @endif>NL</option>
			<option value="en" @if(isset($_COOKIE['language']) && $_COOKIE['language'] === "en") selected="selected" @endif>EN</option>
		</select>
	</form>
</div>


<script>
	document.getElementById('language-selector').addEventListener('change', (ev) => {
		document.getElementById('language-form').submit();
	});
</script>