<div class="list-item">
	<div class="list-item__text">
		<a href="{{$item_href}}/{{$slug}}" class="list-item__title">{{$title}}</a>
		<p class="list-item__date">{{$date}}</p>
		<p>{{$language}}</p>
	</div>
	<div class="list-item__buttons">
		<a href="{{$edit_href}}/{{$slug}}"><button class="primary-button">edit</button></a>
		<a href="{{$delete_href}}/{{$slug}}"><button class="secondary-button">delete</button></a>
	</div>

</div>