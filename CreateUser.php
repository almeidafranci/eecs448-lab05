<?php
if(isset($_POST['id']) && $_POST['id']!=""){
	$id = $_POST['id'];

	include 'conex.php';

	$query = "INSERT INTO users (
				user_id
				) VALUES (
				'$id'
				)";

	if ($result = $mysqli->query($query)) {
		echo "Ok!";
	}else{
		echo "User already exists.";
	}

	/* close connection */
	$mysqli->close();
}else{
	echo "User with empty ID not allowed.";
}
?>