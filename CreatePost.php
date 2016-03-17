<?php
if(isset($_POST['id']) && isset($_POST['text']) && $_POST['id']!="" && $_POST['text']!=""){
	$id = $_POST['id'];
	$text = $_POST['text'];

	include 'conex.php';

	$queryUser = "SELECT * FROM users WHERE user_id = '$id'";

	$query = "INSERT INTO posts (
				author_id,
				content
				) VALUES (
				'$id',
				'$text'
				)";

	if ($mysqli->query($queryUser)->num_rows && $mysqli->query($query)) {
		echo "Post added with sucess!";
	}else{
		echo "User does not exist.";
	}

	/* close connection */
	$mysqli->close();
}else{
	echo "Please fill out all the fiedls.";
}
?>