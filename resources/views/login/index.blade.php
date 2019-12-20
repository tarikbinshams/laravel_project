<!DOCTYPE html>
<html>
    <head>
        <title>Log in</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    </head>  
	
   <style>
	*{
		margin: 0; 
		padding: 0;
	}

	body{
	margin: 0;
	padding: 0;
	font-family: sans-serif;
	background: url(img1.jpg) no-repeat;
	background-size: cover;
	}
	.header1{
				padding-left: 540px;
				padding-top: 70px;
			}
	.form-design{ 
		width: 320px; background: #3e3d3d; 
		padding: 20px 20px; 
		box-sizing: border-box; 
		position: fixed; 
		left: 50%; 
		top: 50%; 
		transform: translate(-50%, -50%);
	}
	h1{
		text-align: center; 
		color: #fff; 
		font-weight: normal; 
		margin-bottom: 20px;
	}
        
input{
	width: 100%; 
	background: none; 
	border: 1px solid #fff; 
	border-radius: 3px; padding: 6px 15px; 
	box-sizing: border-box; 
	margin-bottom: 20px; 
	font-size: 16px; 
	color: #fff;
}
        
input[type="submit"]{ 
	background: #bac675; 
	border: 0; 
	cursor: pointer; 
	color: #3e3d3d;
}
input[type="submit"]:hover{ 
	background: #a4b15c; 
	transition: .6s;
}
        
::placeholder{
	color: #fff;
}
p{
	color: white;
	font-size: 12px;
}
p a{
	color: white;
}
a{
	padding-left: 80px ;
	color: #586124;
}
    </style>
    <body>
    	@if ($errors->any())
		    <div class="alert alert-danger">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif
		@if (session('msg') != null)
		    <div class="alert alert-danger">
		        <ul>
		             <li>{{ session('msg') }}</li>
		        </ul>
		    </div>
		@endif
        <div class="form-design">
        	<h3 style="padding-left: 25px;"><a href="{{ route('home.home')}}">Home</a></h3>
            <form method="POST">
            	@csrf
                <h1>Log in</h1>  
                <input type="text" placeholder="Email or Username" name="email" >
                <input type="password" placeholder="Password" name="password">
				<input type="submit" value="Sign in" name="submit">
				<a href="{{ route('registration.index') }}">Registration here</a>
            </form>
        </div>
        <div>
			
		</div>
    </body>
</html>