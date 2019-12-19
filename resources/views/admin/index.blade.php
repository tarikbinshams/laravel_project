<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
	<style>
		.header1{
			text-align: center;
			padding-top: 100px;
		}
		a:hover{
			text-decoration: none;
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
	<h1 style="text-align: center; padding-top: 20px;"><strong>Hello! Admin</strong></h1>
	<div class="header1">
		<a href="{{route('admin.alluser')}}" class="btn btn-danger">All User</a> |
		<a href="{{route('admin.allorder')}}" class="btn btn-success">All Orders</a> |
		<a href="{{route('admin.allpost')}}" class="btn btn-success">All Post</a> |
		<a href="{{route('admin.alldonate')}}" class="btn btn-info">All Donate</a> |
		<a href="{{route('admin.orderhistory')}}" class="btn btn-primary">Order History</a> |
		<a href="{{route('admin.allrequest')}}" class="btn btn-warning">All Request</a> |
		<a href="{{route('admin.addadmin')}}" class="btn btn-info">Add Admin</a> |
		<a href="{{route('logout.index')}}" class="btn btn-danger">Logout</a>
	</div>
<br>
	
</body>
</html>