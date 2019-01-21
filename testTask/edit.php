<link rel="stylesheet" href="libs/bootstrap.css">
<?php 
	require_once 'controllers/config.php';
	$connect = mysqli_connect($host, $user, $dbpassword, $database);

	if(isset($_GET['id']) && !empty($_GET['id'])) {
		$id = (int)$_GET['id'];
		$query = "SELECT * FROM studentList WHERE id = '$id'";
		$result = mysqli_query($connect, $query);

		while ($row = mysqli_fetch_array($result)) {
?>
		<form method="POST">
			<h4><p align="center" style="color: red;">Record edit</p></h4>
				<div class="container">
					 <input type="hidden" name="id" value="<?= $row['id']; ?>">
					<strong>Insurance Number</strong> <input type="text" class="form-control" name="insNr" value="<?= $row['insuranceNumber']; ?>" maxlength="9" minlength="9"><br>
					<strong>Surname</strong> <input type="text" class="form-control" name="surname" value="<?= $row['surname']; ?>" maxlength="32"><br>
					<strong>Name</strong> <input type="text" class="form-control" name="name" value="<?= $row['name']; ?>" maxlength="32"><br>
					<strong>Year</strong> <input type="text" class="form-control" name="year" value="<?= $row['year'] ?>" maxlength="4"><br>
					<strong>City of birth</strong> <input type="text" class="form-control" name="citOfBr" value="<?= $row['cityOfBirth']; ?>" maxlength="32"><br>
					<strong>University</strong> <input type="text" class="form-control" name="univer" value="<?= $row['university']; ?>" maxlength="32"><br>
					<button type="submit" formaction="controllers/editC.php">Save changes</button>
					<button type="submit" formaction="index.php">Cancel</button>
				</div>
		</form>
<?php
		}
	}
	