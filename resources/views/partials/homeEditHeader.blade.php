<script>
	const inputs = {};
	const addToHiddenForm = (ev) => {
		inputs[ev.target.name] =  `<input type="text" name="${ev.target.name}" value="${ev.target.value}" hidden />`;

		const form = document.getElementById('hidden-from');
		let newHTML =
			'@csrf <input type="text" name="language" value="{{$language}}" hidden /> <button type="submit">Submit</button>';
		Object.keys(inputs).forEach((key) => {
			newHTML += inputs[key];
		})
		form.innerHTML = newHTML;
	}

	const submitForm = () => {
		document.getElementById('language-selector').submit();
	}
</script>
<div class="nav-container">
	<form  action="{{ route('home.edit')}}" class="language-selector" id="language-selector">
		<p>Language</p>
		<select name="language" id="" onChange="submitForm()">
			<option value="nl" @if(isset($language) && $language === "nl") selected="selected" @endif>Dutch</option>
			<option value="en" @if(isset($language) && $language === "en") selected="selected" @endif>English</option>
		</select>
	</form>
	<form class="landingpage-editor" id="hidden-from" action="" method="post">
		<button type="submit">SUBMIT PAGE</button>
	</form>
	<form class="title-editor" action="/page-names-edit" method="post">
		@csrf
		<input name="home" placeholder="home" type="text">
		<input name="about" placeholder="about" type="text">
		<input name="news" placeholder="news" type="text">
		<input name="donations" placeholder="donations" type="text">
		<input name="contact" placeholder="contact" type="text">
		<input name="pages" placeholder="pages" type="text">
		<button type="submit">SUBMIT TITLES</button>
	</form>
</div>