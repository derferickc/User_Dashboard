<!DOCTYPE html>
<html>
<head>
	<title>Edit User</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<style type='text/css'>
	.container{
		width: 900px;
	}
		#top_button{
			margin-left: 724px
		}
		.body{
			display: inline-block;
			width: 900px;
		}
			.left{
				outline: 1px solid black;
				padding-left: 20px;
				display: inline-block;
				width: 425px;
				height: 330px;
			}
				#button_left{
					margin-left: 325px;
				}
			.right{
				padding-left: 20px;
				outline: 1px solid black;
				margin-left: 30px;
				vertical-align: top;
				display: inline-block;
				width: 425px;
				height: 225px;
			}
				#button_right{
					margin-left: 247px;
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
	<hr>
		<div class='container'>
			<h3>Edit user #<?= $edit['id'] ?>
			<a href=''><button type ='button' class='btn btn-primary .btn-md' id='top_button'>Return to Dashboard</button></a></h3>
			<div class='body'>
				<div class='left'>
					<h4>Edit Information</h4>
					<div class='outline1'>
						<form action='/update/<?= $edit['id']?>' method='post'>
							<p>Email Address:</p><input type='text' name='email' value='<?= $edit['email'] ?>'>
							<p>First Name:</p><input type='text' name='first_name' value='<?= $edit['first_name'] ?>'>
							<p>Last Name:</p><input type='text' name='last_name' value='<?= $edit['last_name'] ?>'>
							<p>User Level: </p><select name='select'>
								<option value="normal">normal</option>
								<option value="admin">admin</option>
							</select>
							<p></p><input type='submit' class='btn btn-primary .btn-md' id='button_left' value="Save">
						</form><br>
					</div>
				</div>
				<div class='right'>
					<h4>Change Password</h4>
					<div class='outline2'>
						<form action='/updatepass/<?= $edit['id']?>' method='post'>
								<p>Password:</p><input type='password' name='password'>
								<p>Password Confirmation:</p><input type='password' name='confirm_password'>
								<p></p><input type='submit' class='btn btn-primary .btn-md' id='button_right' value="Update Password">
							</form><br>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>