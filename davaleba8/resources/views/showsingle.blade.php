<!DOCTYPE html>
<html>
<head>
	<title>News</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
	<div style="text-align: center; margin-left: auto; margin-right: auto; width: 80%">
		<br>
		<a class="btn btn-success" href="{{ route('main') }}">Return To Main Page</a>
		<a class="btn btn-success" href="{{ route('home') }}">Return To Home Page</a>
		<br>
		<br>
		<div class="mb-4 card p-4">
			<div class="card-image"><img width="20%" height="20%" src="{{ asset('images'."/".$news->image) }}"></div>
			<div class="card-title"><b>სათაური: </b>{{ $news->title }}</div>
			<div class="card-text"><b>ჟანრი: </b>{{$cat->where("id", $news->category_id)->first()->title}}</div>
			<div class="card-text"><b>აღწერა: </b>{{ $news->description }}</div>
			<div class="card-text"><b>დამატების თარიღი: </b>{{ $news->upload_date }}</div>
			<div class="card-text"><b>თეგები: </b>
				@foreach ($tags as $tag)
					@if ($tag->news_id == $news->id)
						{{ $tag->name_tag }}
					@endif
				@endforeach
			</div>
			
			@foreach (DB::table('users')->get() as $user)
					@if($user->id == $news->user_id)
						<div class="card-text"><b>ავტორი: </b>{{$user->name}}
					@endif
			@endforeach
			
			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>