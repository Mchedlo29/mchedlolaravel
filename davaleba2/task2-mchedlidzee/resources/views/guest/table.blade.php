<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		table,td,td,th{
			border: solid 3px red;
			padding: 5px;
			border-collapse: collapse;
		}
	</style>
</head>
<body>

<table>

<tr>


<th>name</th>
<th>lastname</th>	
<th>address</th>
<th>biography</th>
<th>date_of_birth</th>


</tr>
	@foreach ($newdata as $data)
		<tr>
			<td>{{$data['name']}}</td>
			<td>{{ $data['lastname'] }} </td>
			<td>{{ $data['address'] }} </td>
			<td>{{ $data['biography'] }} </td>
			<td>{{ $data['date_of_birth'] }} </td>
		


		</tr>
		
	@endforeach

</table>

</body>
</html>