<div class="list-item">
	<div class="list-item__text">
		<p class="list-item__title">{{$title}}</p>
		<p class="list-item__date">{{$date}}</p>
		<p>{{$language}}</p>
	</div>
	<div class="list-item__buttons">
		<a href="/custom-page-edit/{{$slug}}"><button class="primary-button">edit</button></a>
		<a href="/custom-page-delete/{{$slug}}"><button class="secondary-button">delete</button></a>
	</div>

</div>