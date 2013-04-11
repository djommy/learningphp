<?php 
	$con = mysql_connect('localhost', 'root', '');
	if(!$con){
		die('Ups, error: ' . mysql_error());
	} else {
		mysql_select_db('learning');
	}
 ?>