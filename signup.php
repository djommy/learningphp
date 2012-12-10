<!DOCTYPE html>
<html>
<head>
	<title>Sign up madafaka!</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<?php include_once('connection.php') ?>
</head>
<body>
	<div id="wrapper">
		<?php include('includes/header.php'); ?>
		
		<?php include('includes/nav.php'); ?>
	
		
		<div id="content">
			<form action="" method="POST">
				User name: <input type="text" name="user"><br>
				Password: <input type="password" name="pass"><br>
				E-mail: <input type="email" name="email"><br>
				<input type="submit" value="Sign up">
			</form>
			<?php 
			if (!empty($_POST)) {
				$q = mysql_query("INSERT INTO `new_user` (`user_name`, `user_password`, `user_email`) VALUES ('" . $_POST['user'] . "', '" . $_POST['pass'] ."', '" . $_POST['email'] . "');"); 
				if ( !mysql_error() ) {
					echo "Welcome new user!!!";
				}else {
					echo("There has been an error: " . mysql_error());
				}
			}
			?>
		</div><!--end content-->
		
		<?php include('includes/sidebar.php'); ?>
		
		<?php include('includes/footer.php'); ?>
		
	
	</div><!--end wrapper-->
</body>
</html>