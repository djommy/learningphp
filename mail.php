<!DOCTYPE html>
<html>
<head>
	<title>The best website EVER!!!</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<script type="text/javascript" src="jquery/functions.js"></script>
	<?php include_once('connection.php'); ?>
</head>
<body>
	<div id="wrapper">
		<?php include('includes/header.php'); ?>
		
		<?php include('includes/nav.php'); ?>

		<?php 
			$name = $_POST['name'];
			$email = $_POST['email'];
			$message = $_POST['message'];
			$formcontent = "From: $name \n Message: $message";
			$recipient = "nikoladzonivojvodic@gmail.com";
			$subject = $_POST['subject'];
			$mailheader = "From: $email \r\n";
			mail($recipient, $subject, $mailheader) or die("ERROR MADAFAKA!!!");
			echo "Thank You!";
		 ?>
		<div id="content">
			<h2>Login</h2>
			<form action="mail.php" method="POST">
				Name: <input type="text" name="name"><br>
				Email: <input type="email" name="email"><br>
				Subject: <input type="text" name="subject"><br>
				Message: <textarea name="message" rows="4" cols="50"></textarea><br>
				<input type="submit" value="Send a message">
			</form>
			<!-- <p>If you don't have an account please <a href="signup.php">sign up</a></p> -->
		</div><!--end content-->
		

		<?php include('includes/sidebar.php'); ?>
		
		<?php include('includes/footer.php'); ?>
		
	
	</div><!--end wrapper-->
</body>
</html>