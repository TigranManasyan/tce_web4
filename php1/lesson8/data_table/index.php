<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
	<script src="js/main.js"></script>
</head>
<body>
	<div class="container">
		<h2 class="mt-2 mb-2 text-center">Students</h2>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>#</th>
					<th>First name</th>
					<th>Last name</th>
					<th>Age</th>
					<th>Address</th>
					<th>Action</th>
				</tr>
			</thead>
  			<tbody id="result">
  				
  			</tbody>
		</table>
	</div>	

	<div id="new-student" class="mt-3 container">
		<h2 style="cursor:pointer;" id="new-student">New Student</h2>
		<div style="display:none" id="banner">
			
		<div class="mb-3">
		  <label for="exampleFormControlInput1" class="form-label">First name</label>
		  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="First name">
		</div>
		<div class="mb-3">
		  <label for="exampleFormControlInput1" class="form-label">Last name</label>
		  <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="Last name">
		</div>
		<div class="mb-3">
		  <label for="exampleFormControlInput1" class="form-label">Age</label>
		  <input type="number" min="14" max="28" class="form-control" id="exampleFormControlInput1" placeholder="Age">
		</div>
		<div class="mb-3">
		  <label for="exampleFormControlInput1" class="form-label">Address</label>
		  <input type="text" class="form-control" id="exampleFormControlInput3" placeholder="Address">
		</div>
		<button class="add btn btn-primary">Add</button>
		</div>
	</div>
</body>
</html>