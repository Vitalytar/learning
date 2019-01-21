<link rel="stylesheet" href="../libs/bootstrap.css">
<script src="../libs/bootstrap.js"></script>
<?php
	require_once 'config.php';

	$connect = mysqli_connect($host, $user, $dbpassword, $database) 
    		or die("Ошибка " . mysqli_error($link));
	$search = $_POST['searchLbl'];
	$query = "SELECT insuranceNumber, surname, name, year, cityOfBirth, university, id
                  FROM studentList WHERE `insuranceNumber` LIKE '%$search%'
                  OR `surname` LIKE '%$search%' OR `name` LIKE '%$search%'
                  OR `year` LIKE '%$search%' OR `cityOfBirth` LIKE '%$search%'
                  OR `university` LIKE '%$search%'";

	$data = mysqli_query($connect, $query);
	if($data) {
		$rows = mysqli_num_rows($data);
?>
<div class="container">
	<table border="1" class="table table-striped table-hover table-condensed" style="margin-top: 3%;">
   	<tr>
   	<thead>
   		<th scope="col" class="text-primary">Insurance Number</th>
   		<th scope="col" class="text-primary">Surname</th>
   		<th scope="col" class="text-primary">Name</th>
   		<th scope="col" class="text-primary">Year of birth</th>
   		<th scope="col" class="text-primary">City of birth</th>
   		<th scope="col" class="text-primary">University</th>
   	</thead>
   	</tr> 
<?php
    for ($i = 0 ; $i < $rows ; ++$i)
    {
        $row = mysqli_fetch_row($data);

        echo '<tr>';
            for ($j = 0 ; $j < 6 ; ++$j) echo "<td>$row[$j]</td>";
?>
          <td><a href="delete.php?id=<?= $row[$j]; ?>"><img src="../images/trash.png" style="width: 20px; height: 20px;"></a><a href="../edit.php?id=<?= $row[$j]; ?>"><img src="../images/edit.png" style="width: 20px; height: 20px;" name="edit"></a></td>
<?php
    echo "</tr>";
    }
    ?>
    <a href="../index.php"><img src="../images/back.png" width="50px" height="50px"></a>
    <?php
    echo "</table>";
}
?>
</div>