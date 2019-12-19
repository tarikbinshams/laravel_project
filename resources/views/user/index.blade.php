<!DOCTYPE html>
<html>
<head>
	<title>User</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
	<style>
		.header1{
			text-align: center;
		}
		.mypost{
			width: 550px;
			padding-left: 20px;
			float: left;
		}
		.myorder{
			width: 600px;
			padding-left: 80px;
			float: left;
		}
	</style>
</head>
<body>
	<br>
	<div class="header1">
		<a href="{{ route('home.home') }}">Home</a> |
		<a href="{{ route('user.addbook') }}">Add Post</a> |
		<a href="{{ route('user.donatebook') }}">Donate Book</a> |
		<a href="{{ route('user.mydonatebook') }}">My Donated Books</a> |
		<a href="{{ route('user.myprofile') }}">My Profile</a> |
		<a href="{{ route('logout.index')}}">Logout</a>
	</div>
<br>
	<div class="mypost">
		<h2 style="text-align: center;">My Post</h2>
		<table border="1" class="table table-striped"> 
			<tr>
				<th>Book ID</th>
				<th>Book Name</th>
				<th>Author Name</th>
				<th>Category No</th>
				<th>Price</th>
				<th>Action</th>
			</tr>
			@foreach($book as $books)
			<tr>
				<td>{{ $books->id }}</td>
				<td>{{ $books->bname }}</td>
				<td>{{ $books->aname }}</td>
				<td>{{ $books->category }}</td>
				<td>{{ $books->price }}</td>
				<td>
					<a href=""> EDIT </a> | 
					<a href=""> DELETE </a> 
				</td>
			</tr>
			@endforeach
		</table>
	</div>
	<div class="myorder">
			<h2 style="text-align: center;">My Order</h2>
			<table border="1" class="table table-striped">
					<th>Order ID</th>
					<th>Book Name</th>
					<th>Author Name</th>
					<th>Category</th>
					<th>Price</th>
					<th>Seller Email</th>
				</tr>
				@foreach($order as $books)
				<tr>
					<td>{{ $books->id }}</td>
					<td>{{ $books->bname }}</td>
					<td>{{ $books->aname }}</td>
					<td>{{ $books->category }}</td>
					<td>{{ $books->price }}</td>
					<td>{{ $books->semail }}</td>
				</tr>
				@endforeach
			</table>
		</div>
</body>
</html>