<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<style type='text/css'>
/**{
	outline: 1px dotted red;
}*/
	.container{
		width: 900px;
	}
	.rectangle{
		padding-left: 20px;
		background-color: #D0D0D0;
		height: 200px; 
	}
		.text{
			padding-top: 20px;
			margin-left: 20px;
		}
	.three{
		margin-top: 30px;
		display: inline-block;
		width: 870px;
		height: 200px;
	}
		.textbox{
			margin-left: 18px;
			margin-right: 18px;
			display: inline-block;
			vertical-align: top;
			width: 250px;
			height: 200px;
		}

</style>
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
				<div class='rectangle'>
					<div class='text'>
						<h3>Welcome to the Test</h3>
						<p>We're going to build a cool application using a MVC framework!
						 This application was built with the Village88 folks!</p>
						 <a href='register'><button type ='button' class='btn btn-primary .btn-md'>Start</button></a>
					</div>
				</div>
				<div class='three'>
					<div class='textbox'>
						<h4>Manage Users</h4>
						<p>Using the application, you'll learn how to add, remove, and 
							edit users for the application.</p>
					</div>
					<div class='textbox'>
						<h4>Leave Messages</h4>
						<p>Users will be able to leave a message to another user using this application</p>
					</div>
					<div class='textbox'>
						<h4>Edit User Information</h4>
						<p>Admins will be able to edit another user's information (email address, first name, last name, etc).</p>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>