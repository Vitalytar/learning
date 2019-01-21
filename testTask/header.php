<h3 align="center">Student list</h3>
<form method="POST">
	 <div class="container" style="margin-top: 3%;">
		<div class="row">
			<div class="col-sm">
				<strong>Insurance number</strong>
				<input type="text" name="insNr" placeholder="Insurance Number" class="form-control" type="text" maxlength="9" minlength="9">
			</div>
			<div class="col-sm">
				<strong>Surname</strong>
				<input type="text" name="surname" placeholder="Surname" class="form-control" type="text" minlength="3" maxlength="32">
			</div>
			<div class="col-sm">
				<strong>Name</strong>
				<input type="text" name="name" placeholder="Name" class="form-control" type="text" name="name" minlength="3" maxlength="32">
			</div>
		</div><br/>
		<div class="row">
			<div class="col-sm">
				<strong>Year of birth</strong>
				<input type="text" name="yearOfBirth" placeholder="Year Of Birth" class="form-control" type="text" minlength="4" maxlength="4">
			</div>
			<div class="col-sm">
				<strong>City of birth</strong>
				<input type="text" name="cityOfBirth" class="form-control" placeholder="City Of Birth" type="text" minlength="3" maxlength="32">
			</div>
			<div class="col-sm">
				<strong>University</strong>
				<input type="text" name="Univer" class="form-control" placeholder="University" type="text" minlength="3" maxlength="32">
			</div>
		</div><br/>
		</form>
		<button type="submit" name="addInfo" class="btn btn-primary" formaction="add.php">Add</button>
	</div><br/><hr/>
	<form method="POST">
		<div class="container"><strong><p align="center">Search</p></strong>
		<div class="input-group mb-3">
			<input type="text" name="searchLbl" class="form-control" placeholder="Search" minlength="3" maxlength="32">
			<input type="submit" name="srch" value="Search" formaction="controllers/search.php" class="btn btn-primary" minlength="3" maxlength="32">	
		</div>
	</div>
	</form>
	<hr/>