<?php
	require_once 'controllers/config.php';

	$connect = mysqli_connect($host, $user, $dbpassword, $database) 
    		or die("Ошибка " . mysqli_error($link));
    		
	$query = "SELECT insuranceNumber, surname, name, year, cityOfBirth, university, id FROM studentList ORDER BY id DESC";
	$data = mysqli_query($connect, $query);

	if($data) {
    $rows = mysqli_num_rows($data); // количество полученных строк
?> 

<div class="container">
<table border="1" class="table table-striped table-hover table-condensed">
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
          <td><a href="controllers/delete.php?id=<?= $row[$j]; ?>" style="text-decoration: none;"><img src="images/trash.png" style="width: 20px; height: 20px;"></a><a href="edit.php?id=<?= $row[$j]; ?>" style="text-decoration: none;"> <img src="images/edit.png" style="width: 20px; height: 20px;" name="edit"></a></td>
<?php
    echo "</tr>";
    }
    echo "</table>";
}
?>
</div>