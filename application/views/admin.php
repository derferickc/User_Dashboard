<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<style = 'text/css'>
	#button_top{
		margin-left: 990px;
	}
</style>
</head>
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
			<div class='titles'>
				<div class='title'>
					<h4>Manage Users</h4>
				</div>
				<div class='button'>
					<a href='/newuser/'><button type='button' class='btn btn-primary .btn-md' id='button_top'>Add new</button></a>
				</div>
			</div><br>
			<table class="table table-condensed">
				  <tr>
				    <th>ID</th>
				    <th>Name^</th> 
				    <th>E-mail</th>
				    <th>Created At</th>
				    <th>User Level</th>
				    <th>Actions</th>
				  </tr>
<?php
	foreach($all_users as $user)
	{
?>
					<tr>
						<td><?= $user['id'] ?></td>
						<td><a href='/userinfo/<?=$user['id'] ?>'><?= $user['first_name'] ?> <?= $user['last_name'] ?></a></td>
						<td><?= $user['email'] ?></td>
						<td><?= $user['created_at'] ?></td>
<?php
	$userlevel = '';
	if($user['user_level']== 1)
	{
		$userlevel = 'admin';
	}
	else
	{
		$userlevel = 'normal';
	}
?>
						<td><?= $userlevel ?></td>
<?php
	$remove_URL = '/remove/' . $user['id'];
?>

						<td><a href='/edituser/<?= $user['id']?>'> Edit |</a>
							<a href= <?=$remove_URL?> onclick="return confirm('Are you sure you want to remove this user?');"> Remove </a></td>
					</tr>
<?php
	}
?>
				</table>
			</div>
		</div>
	</body>
</html>
