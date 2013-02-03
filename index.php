<!DOCTYPE html>
<html>
<head>
	<title>The best website EVER!!!</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<script type="text/javascript" src="jquery/functions.js"></script>
	<?php include_once('connection.php'); ?>
</head>

<div id="wrapper">
		<?php //include('includes/header.php'); ?>
		
		<?php// include('includes/nav.php'); ?>
		
		<div class="login noAccount"> <?php if (!empty($_POST)) {
				$q = mysql_query("SELECT * FROM `new_user` WHERE `user_name`='" . $_POST['firstname'] . "' AND `user_password`='" . $_POST['pwd'] . "';");
				$username = $_POST['firstname'];
				if(mysql_num_rows($q) > 0){
					die('welcome ' . $username . ' please ' . '<a href="home.php">continue</a>');
				} else {
					echo "You don't have an account, please go die now!!!!";
				}
			} ?>
		</div>
		<div id="content">
			<?php include ('includes/welcome.php'); ?>
			<?php include ('includes/jovana.php') ?>
			<div class="welcome">
				<?php echo $welcomeMessage . $jovana ;?>
			</div>
			<h2>Login</h2>
			<form action="" method="POST">
				User name: <input type="text" name="firstname" required="required"><br>
				Password: <input type="password" name="pwd" required="required"><br>
				<input class="submit" type="submit" value="Login">
			</form>
			<p>
				If you don't have an account please <a href="signup.php">sign up</a><br>
				Forgot your <a href="retrive-password.php">password?</a> You stupid fuck!
			</p>
		</div><!-- end content -->
</div> <!--end wrapper-->
</body>
</html>