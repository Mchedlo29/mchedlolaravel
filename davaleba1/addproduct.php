<!DOCTYPE html>
<html>
<head>

	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
	<div class="container card mt-4">
		<form method="POST" action="product_insert.php">
		  <div class="form-group">
		    <label for="">Product name</label>
		    <input type="text" class="form-control" placeholder="product name" name="product_name">
		    
		  </div>
		  <div class="form-group">
		    <label for="">Description</label>
		    <input type="text" class="form-control" placeholder="description" name="description">
		  </div>
		  
		  <button type="submit" class="btn btn-primary">Add Product</button>
		</form>
	</div>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js" ></script>
</body>
</html>