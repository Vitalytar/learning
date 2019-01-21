<?php
	require_once 'config.php';
	$connect = mysqli_connect($host, $user, $dbpassword, $database);

	if(isset($_POST['id']) && isset($_POST['insNr']) 
		&& isset($_POST['surname']) && isset($_POST['name'])
		&& isset($_POST['year']) && isset($_POST['citOfBr']) && isset($_POST['univer'])) {
		$id = htmlentities($_POST['id']);
		$insNr = htmlentities($_POST['insNr']);
		$surname = htmlentities($_POST['surname']);
		$name = htmlentities($_POST['name']);
		$year = htmlentities($_POST['year']);
		$citOfBr = htmlentities($_POST['citOfBr']);
		$univer = htmlentities($_POST['univer']);

		$query = "UPDATE studentList 
				SET 
				insuranceNumber ='$insNr',
				surname = '$surname',
				name = '$name',
				year = '$year',
				cityOfBirth = '$citOfBr',
				university = '$univer'
				WHERE id = '$id'";

		$result = mysqli_query($connect, $query) or die ("ERROR".mysqli_error($connect));
		if($result) {
			header('Refresh: 1; url="../index.php"');
			exit('Updated');
		}
	} else {
		header('Refresh: 3; url="../index.php"');
		exit('Empty. Abort changes');
	}
	if(isset($_POST['cancel'])) {
		header('Location: ../index.php');
	}