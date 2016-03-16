<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Students</title>
<link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}" />
<link href="https://fonts.googleapis.com/css?family=Lato:100"
	rel="stylesheet" type="text/css">
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<script src="{{asset('/js/jquery-1.10.2.min.js')}}"></script>

</head>
<style>
.register {
	margin: auto;
	position: absolute;
	top: 0;
	left: 0;
	bottom: 0;
	right: 0;
}

.register.is-Responsive {
	width: 70%;
	height: 60%;
	min-width: 300px;
	max-width: 548px;
	margin-top:170px;
	padding: 40px;
}
.login {
	margin: auto;
	position: absolute;
	top: 0;
	left: 0;
	bottom: 0;
	right: 0;
}

.login.is-Responsive {
	width: 70%;
	height: 50%;
	min-width: 300px;
	max-width: 500px;
	margin-top:170px;
	padding: 40px;
}

</style>


<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">Students</a>
			</div>
			<ul class="nav navbar-nav">
				<li class="listall"><a class="active" href="/liststudent">Home</a></li>
				<li class="add"><a href="/addstudent">Add</a></li>
				<!-- 				<li><a href="#">Page 3</a></li> -->
			</ul>

		</div>
	</nav>

	<div id="container">@yield('content')</div>

	<script src="{{ asset('/js/bootstrap.min.js')}}"></script>
</body>
</html>