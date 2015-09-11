<!DOCTYPE html>
<html>
<head>
	<title>New User</title>
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
<?php

		$editprofile_URL = '/editprofile/' . $this->session->userdata['userinfo']['id'];
?>
		        <li></span><a href=<?=$editprofile_URL?>><span class="glyphicon glyphicon-user">Profile</a></li> 
		      </ul>
		      <ul class="nav navbar-nav navbar-right">
		        <li><a href="destroy"><span class="glyphicon glyphicon-log-in"></span> Log off</a></li>
		      </ul>
		    </div>
		  </div>
		</nav>
	<div class='container'>
		<div class='left'>
			<?= $this->session->flashdata('errors') ?>
			<h4>Add a new user</h4>
			<form action='' method='post'>
				<p>Email Address:</p><input type='text' name='email'>
				<p>First Name:</p><input type='text' name='first_name'>
				<p>Last Name:</p><input type='text' name='last_name'>
				<p>Password:</p><input type='password' name='password'>
				<p>Password Confirmation:</p><input type='password' name='confirm_password'>
				<p></p><input type='submit' class='btn btn-primary' value="Create">
			</form><br>
		</div>
		<div class='right'>
			<a href='/admin'><button type='button' class='btn btn-primary .btn-md'>Return to Dashboard</button></a>
		</div>
	</div>
</body>
</html>