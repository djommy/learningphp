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
		$querry = ("SELECT `user_password` FROM `new_user` WHERE `user_name`='". $_POST['username'] ."'");
		$result = mysql_query($querry);
		if (!$result) {
			echo " nesto nije u redu sa ($querry) iz baze: " . mysql_error(); 
		}

		if (mysql_num_rows($result) == 0) {
			echo "You madafaka didn't enter the username that's in my nigga base!!!";
		}
	 ?>
	<form action="retrive-password.php" method="POST">
		Username<input type="text" name="username"><br>
		<input type="submit" value="Get your password">
	</form>

	<?php 
		while ($row = mysql_fetch_assoc($result)) {
			echo "Your shitty password is: " . $row['user_password'];
		}
	 ?>
	 <p>
	 	Now go <a href="index.php">back</a> and do shit right this time.
	 </p>
</body>