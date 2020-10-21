<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="{{ route('testpost') }}" method 
	="POST">
		@csrf
		<input type="text" name="name" placeholder="name">
		<input type="text" name="lastname" placeholder="lastname">
		<input type="text" name="address" placeholder="address">
		<input type="textarea" name="biography" placeholder="biography">
		<input type="date" name="date_of_birth" placeholder="date_of_birt">

		<button>DONE</button>
	</form>

</body>
</html>