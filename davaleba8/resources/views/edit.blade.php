<!DOCTYPE html>
<html>
<head>
	<title> Post </title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div style="text-align: center;">
		<form method="POST" action="{{ route('update',["id"=>$news->id]) }}" enctype="multipart/form-data">
				@csrf
			<input type="hidden" name="id" value="{{ $news->id }}">
			<label>Title</label><br>
			<input type="text" name="title" value="{{ $news->title }}"><br>

			<label>Description</label><br>
			<textarea name="description">{{ $news->description }}</textarea><br>

			<label>Short Description</label><br>
			<textarea name="shortdesc">{{ $news->shortdesc }}</textarea><br>

			<input type="file" name="image"><br>
			
			<label>Upload Time</label>
			<input type="date" name="upload_date" value="{{ $news->upload_date }}"><br>

			<label>Select Category</label><br>
			<select name="category_id">
				@foreach (App\Category::get() as $cat){
				<option value="{{ $cat->id }}"> {{ $cat->title }} </option>
			}
			@endforeach
			</select>
			
			<br>
			<label>Enter Tags Here</label><br>
			@foreach ($tags as $t)
				@if ($t->news_id == $news->id)
					<input type="text" name="tags[]" value="{{ $t->name_tag }}"><br><br>
					@continue
					<input type="text" name="tags[]" value="{{ $t->name_tag }}"><br><br>
					@continue
					<input type="text" name="tags[]" value="{{ $t->name_tag }}"><br><br>
					@continue
					<input type="text" name="tags[]" value="{{ $t->name_tag }}"><br><br>
				@endif
			@endforeach
			<button class="btn btn-success">Save</button><br><br>

			<a class="btn btn-success" href="{{ route('addcategory') }}"> Add Category </a>
			<a class="btn btn-success" href="{{ route('show') }}"> Tap To See The News </a>
			<a class="btn btn-success" href="{{ route('home') }}">Return To Home</a><br>
		</form>
	</div>
</body>
</html>