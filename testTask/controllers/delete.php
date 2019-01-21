<?php 
	require_once 'config.php';

	$connect = mysqli_connect($host, $user, $dbpassword, $database);

	if(isset($_GET['id'])) {
		$id = mysqli_real_escape_string($connect, $_GET['id']);
		$query = "DELETE FROM studentList WHERE id = '$id'";
		$result = mysqli_query($connect, $query) or die ("Error".mysqli_error($connect));
		mysqli_close($connect);
		header('Location: ../index.php');
	} else {
		header('Refresh: 2; url="../index.php"');
		exit('ERROR');
	}

