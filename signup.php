<!DOCTYPE html>
<html>
<head>
	<title>Sign up madafaka!</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<?php include_once('connection.php') ?>
</head>
<body>
	<div id="wrapper">
		<?php include('variables/variables.php'); ?>
		<h2><?php echo $signup ?></h2>

		<div id="content">
			<form action="" method="POST">
				User name: <input type="text" name="user" required="required"><br>
				Password: <input type="password" name="pass" required="required"><br>
				E-mail: <input type="email" name="email"><br>
				Security question: <input type="text" name="question" required="required"><br>
				Answer: <input type="text" name="answer" required="required"><br>
				<input type="submit" value="Sign up">
			</form>
			<?php 
			if (!empty($_POST)) {
				$q = mysql_query("INSERT INTO `new_user` (`user_name`, `user_password`, `user_email`, `question`, `answer`) VALUES ('" . $_POST['user'] . "', '" . $_POST['pass'] ."', '" . $_POST['email'] . "', '" . $_POST['question'] ."', '" . $_POST['answer'] ."');"); 
				if ( !mysql_error() ) {
					echo "Welcome new user!!!";
				}else {
					echo("There has been an error: " . mysql_error());
				}
			}
			?>
		</div><!--end content-->
		
		<?php include('includes/footer.php'); ?>
		
	
	</div><!--end wrapper-->
</body>
</html>