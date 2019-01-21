<?php
	require_once 'controllers/config.php';

	$errors = array();
	if(isset($_POST['addInfo'])) {
		if(trim($_POST['insNr']) == '' || strlen($_POST['insNr']) > 10) { $errors = 'Insurance Number is empty or out of range (Max 10)!'; }
		if(trim($_POST['surname']) == '') { $errors[] = 'Surname is empty!'; }
		if(trim($_POST['name']) == '') { $errors[] = 'Name is empty!'; }
		if(trim($_POST['yearOfBirth']) == '') { $errors[] = 'Year Of Birth is empty!'; }
		if(trim($_POST['cityOfBirth']) == '') { $errors[] = 'City Of Birth is empty!'; }
		if(trim($_POST['Univer']) == '') { $errors[] = 'University is empty!'; }

		if(empty($errors)) {
			$insNr = htmlentities($_POST['insNr']);
			$surname = htmlentities($_POST['surname']);
			$name = htmlentities($_POST['name']);
			$yrOfBir = htmlentities($_POST['yearOfBirth']);
			$citOfBir = htmlentities($_POST['cityOfBirth']);
			$univer = htmlentities($_POST['Univer']);

    		$connect = mysqli_connect($host, $user, $dbpassword, $database) 
    		or die("Ошибка " . mysqli_error($link));

    		$query = "INSERT INTO studentList 
    				  VALUES(NULL, '$insNr', '$surname', '$name',
    				  '$yrOfBir', '$citOfBir', '$univer')";

    		$result = mysqli_query($connect, $query) or die ("Error".mysqli_error($connect));
    		mysqli_close($connect);
    		header('Location: /index.php');
		} else {
			   	header('Refresh: 2; url="/index.php"');
   				exit(array_shift($errors).' <strong> Go back</strong>');

	}
}
	

