
<div class="nav-container">
	<div class="nav">
		<div class="nav__logo">
			<p>Forest</p>
			<img src="{{asset('images/forest-icon.svg')}}" alt="">
		</div>

		<div class="nav__buttons">
			<a href="{{ route('home')}}" @if($page === 'home') class="nav__buttons--focused" @endif>home</a>
			<a href="{{ route('home') }}">about</a>
			<a href="{{ route('home') }}">news</a>
			<a href="{{ route('home') }}">donations</a>
			<a href="{{ route('home') }}">contact</a>
			<select name="language" id="language-selector" >
				<option value="nl" @if(isset($language) && $language === "nl") selected="selected" @endif>NL</option>
				<option value="en" @if(isset($language) && $language === "en") selected="selected" @endif>EN</option>
			</select>
		</div>
	</div>
</div>


<script>
	document.getElementById('language-selector').addEventListener('change', (ev) => {
		window.location.href =`?language=${ev.target.value}`;
	});
</script>