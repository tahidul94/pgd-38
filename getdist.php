<?php

include "connection.php";
 


$sql = "select distinct dist_name from dist_list";

$res = mysqli_query($con,$sql);

	echo"<select>";
	while($rows=mysqli_fetch_assoc($res)){
		echo "<option>".$rows['dist_name']."</option>";
	}
	echo"</select>";


?> 