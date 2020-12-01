<!DOCTYPE html>
<html>
<head>
	<title> Post </title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div style="text-align: center;">
		<form method="POST" action="{{ route('savepost') }}" enctype="multipart/form-data">
			@csrf
		<label>Title</label><br>
		<input class="@error('title') is-invalid @enderror" type="text" name="title" value="{{ old('title')}}"><br>
		@error('title')
			<span>
				<strong>{{ $message }}</strong>
			</span>
		@enderror
		<br>
		<label>Description</label><br>
		<textarea class="@error('description') is-invalid @enderror" name="description">{{ old('description') }}</textarea><br>
		@error('description')
			<span>
				<strong>{{ $message }}</strong>
			</span>
		@enderror
		<br>
		<label>Short Description</label><br>
		<textarea name="shortdesc">{{ old('shortdesc') }}</textarea><br>

		<input type="file" name="image">
		
		<label>Upload Time</label>
		<input type="date" name="upload_date" value="{{ old('upload_date') }}"><br>

		<label>Select Category</label><br>
		<select name="category_id">
			@foreach (App\Category::get() as $cat){
			<option value="{{ $cat->id }}"> {{ $cat->title }} </option>
		}
		@endforeach
		</select>
		
		<br>
		<label>Enter Tags Here</label><br>
		<input type="text" name="tags[]"{{ old('description') }}><br><br>
		<input type="text" name="tags[]"><br><br>
		<input type="text" name="tags[]"><br><br>
		<input type="text" name="tags[]"><br><br>
		<button class="btn btn-success">Save</button><br>
		<br>
		<a class="btn btn-success" href="{{ route('addcategory') }}"> Add Category </a>
		<a class="btn btn-success" href="{{ route('show') }}"> Tap To See The News </a>
		<a class="btn btn-success" href="{{ route('home') }}">Return To Home</a>
	</div>
	</form>
</body>
</html>