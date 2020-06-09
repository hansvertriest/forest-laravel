
<div class="admin-header">
	<a href="{{route('home')}}" class="nav__logo">
		<p>Forest</p>
		<img src="{{asset('images/forest-icon.svg')}}" alt="">
	</a>
	<div class="nav__buttons">
		<a href="{{ route('admin.pages')}}" @if($page === 'pages') class="nav__buttons--focused" @endif>Custom Pages</a>
		<a href="{{ route('admin.blog')}}" @if($page === 'blog') class="nav__buttons--focused" @endif>Blog</a>
		<a href="{{ route('admin.getDonations')}}" @if($page === 'donations') class="nav__buttons--focused" @endif>Donations</a>
		<a href="{{ route('admin.pages') }}" @if($page === 'mails') class="nav__buttons--focused" @endif>mails</a>
		<a href="{{ route('home.edit') }}" @if($page === 'mails') class="nav__buttons--focused" @endif>Landing page</a>
	</div>
</div>