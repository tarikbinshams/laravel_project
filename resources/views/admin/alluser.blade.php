<!DOCTYPE html>
<html>
<head>
	<title>All User</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<style>
		.header1{
			text-align: center;
		}
		.mypost{
			width: 90%;
			padding-left: 220px;
			float: left;
		}
		#abc{
			display: inline-block;
			padding: 9px 12px;
			padding-top: 7px;
			margin-bottom: 0;
			font-size: 14px;
			line-height: 20px;
			color: #5e5e5e;
			text-align: center;
			vertical-align: middle;
			cursor: pointer;
			background-color: #d1dade;
			-webkit-border-radius: 3px;
			-webkit-border-radius: 3px;
			-webkit-border-radius: 3px;
			background-image: none !important;
			border: none;
			text-shadow: none;
			box-shadow: none;
			transition: all 0.12s linear 0s !important;
			font: 14px/20px "Helvetica Neue",Helvetica,Arial,sans-serif;
		}
		
	</style>
</head>
<body>
	<br>
	<p style="text-align: center; padding-top: 0px; font-size: 30px;"><strong>All User</strong></p>
	<div class="header1">
			<a class="btn" id="abc"href="{{ route('admin.index')}}"><i class="fa fa-home"></i></a> |
		<a href="{{ route('logout.index')}}" class="btn btn-danger">Logout</a>
	</div>
<br>
	<div class="mypost">
		<table border="1" class="table table-striped"> 
			<tr>
				<th>Name</th>
				<th>Phone Number</th>
				<th>Location</th>
			</tr>
			@foreach($user as $u)
			<tr>
				<td>{{ $u->name }}</td>
				<td>{{ $u->phone }}</td>
				<td>{{ $u->location }}</td>
			</tr>
			@endforeach
		</table>
	</div>
</body>
</html>