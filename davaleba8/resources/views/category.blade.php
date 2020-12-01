<!DOCTYPE html>
<html>
<head>
	<title>Category</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div style="text-align: center;">
		<form method="POST" action="{{ route('save_category') }}">
			<br>
			<h1> Add Category </h1>
			<br>
			@csrf
			<input class="input" type="text" name="title">
			<button class="btn btn-success">Add</button>
			<br><br>
			<a class="btn btn-success" href="{{ route('main') }}"> Return To Main Page </a>
			<br><br>
			<a class="btn btn-success" href="{{ route('home') }}">Return To Home</a>
		</form>
	</div>
</body>
</html>