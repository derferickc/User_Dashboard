<!DOCTYPE html>
<html>
<head>
	<title>Signin Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
	<body>
		<nav class="navbar navbar-default">
		  <div class="container-fluid">
		    <div class="navbar-header">
		      <a class="navbar-brand">Test App</a>
		    </div>
		    <div>
		      <ul class="nav navbar-nav">
		        <li><a href="/admin">Dashboard</a></li>
		      </ul>
		      <ul class="nav navbar-nav navbar-right">
		        <li><a href='signin'><span class="glyphicon glyphicon-log-in"></span> Sign in</a></li>
		      </ul>
		    </div>
		  </div>
		</nav>
		<div class='container'>
			<div class='body'>
				<h4>Signin</h4>
				<form action='/login' method='post'>
					<p>Email Address:</p><input type='text' name='email'>
					<p>Password:</p><input type='password' name='password'>
					<p></p><input type='submit' class='btn btn-primary .btn-md' value="Sign In">
				</form><br>
				<a href='register'>Don't have an account? Register.</a>
			</div>
		</div>
	</body>
</html>