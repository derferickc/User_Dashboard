<!DOCTYPE html>
<html>
<head>
	<title>User Information</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<style type="text/css">
	.comments{
		margin-left: 50px;
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
	<div class='container'>
		<div class='userinfo'>
			<h3><?= $profile['first_name'] ?> <?= $profile['last_name'] ?></h3>
			<p>Registered at: <?= $profile['created_at'] ?></p>
			<p>User ID: #<?= $profile['id'] ?></p>
			<p>Email address: <?= $profile['email'] ?></p>
			<p>Description: <?= $profile['description'] ?></p>
		</div><br>
			<form action='/createmessage/<?=$profile['id'] ?>' method='post'>
				<h3>Leave a message for <?= $profile['first_name'] ?></h3>
				<p><textarea name="content" rows="4" cols="85"></textarea></p>
				<p></p><input type='submit' class='btn btn-primary .btn-md' value="Post">
			</form>
<?php
	foreach($messages as $message){ 
?>
		<h3><?= $message['first_name'] ?> <?= $message['last_name']?> - <?= $message['created_at']?></h3>
		<p><?=$message['content']?></p>

<?php
	foreach($comments as $comment){ 
		if($comment['messages_id'] == $message['id']){
?>
		<h3 class='comments'><?= $comment['first_name'] ?> <?= $comment['last_name']?> - <?= $comment['created_at']?></h3>
		<p class="comments"><?=$comment['c_content']?></p>
<?php
		}
	}
?>
			<form action='/createcomment/<?=$profile['id'] ?>/' method="post" class="comments">
				<p><textarea name="c_content" rows="4" cols="65" placeholder='Leave a comment'></textarea></p>
				<input type="hidden" name="messages_id" value="<?= $message['id'] ?>">
				<p></p><input type='submit' class='btn btn-primary .btn-md' value="Post">
			</form>
<?php 
}
?>
	</div>
</body>
</html>