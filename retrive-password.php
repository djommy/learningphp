<!DOCTYPE html>
<html>
<head>
	<title>The best website EVER!!!</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<script type="text/javascript" src="jquery/functions.js"></script>
	<?php include_once('connection.php'); ?>
</head>

<header>
	<h1>What is your username?</h1>
</header>
<body>
	<?php 
		$q = mysql_query("SELECT `user_name`, AND `user_password` FROM `learning`");
		$user = $_GET['username'];
		if ($q == $user) {
			echo $user;
		};
	 ?>
	<form action="retrive-password.php" method="GET">
		Username<input type="text" name="username"><br>
		<input type="submit" value="Get your password">
	</form>
</body>