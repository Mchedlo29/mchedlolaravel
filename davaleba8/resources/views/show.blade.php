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
		<table style="width: 100%">
			<tr>
				<th>N</th>
				<th>Title</th>
				<th>Category</th>
				<th>Short Description</th>
				<th>Upload Date</th>
				<th>Option</th>
			</tr>
			@foreach ($news as $n)
			<tr>
				<td><b>{{ ++$loop->index }}</b></td>
				<td>{{$n->title}}</td>
				<td>{{$cat->where("id", $n->category_id)->first()->title }}</td>
				<td>{{$n->shortdesc}}</td>
				<td>{{$n->upload_date}}</td>
				
				<td>
					<a class="btn btn-success" href="{{ route('showsingle',["id"=>$n->id]) }}">ნახვა</a>

					@if (Auth::user()->id == $n->user_id)
						<a class="btn btn-warning" href="{{ route('edit',["id"=>$n->id]) }}">ჩასწორება</a>

						<form action="delete" method="POST">
							@csrf
							<input type="hidden" name="id" value="{{$n->id}}">
							<button class="btn btn-danger">წაშლა</button>
						</form>
					@endif
				</td>
			</tr>
			@endforeach
		</table>
	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>