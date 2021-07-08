<?php
include "connection.php";

$query = "select * from applicant";

$allData = mysqli_query($con,$query);

$rowCount = mysqli_num_rows($allData);

if($rowCount){

	 $i=1;
	while ($res=mysqli_fetch_assoc($allData)) {
		echo $i.". ".$res['name']."<br>";
		$i=$i+1;
	}
}


?>