<?php
include "connection.php"; 
 $dist = $_GET['selectDist'];

$dist_m =mysqli_real_escape_string($con,$dist);

$query = "select dist_name, thana_name from dist_list where dist_name='$dist_m'";

$res = mysqli_query($con,$query);

if (mysqli_num_rows($res)>0){
	echo "<select>";
	while($rows = mysqli_fetch_assoc($res)){
		echo "<option>".$rows['thana_name']."</option>";
	}

    echo "</select>";
}



?>