<?php
include "connection.php";
session_start();

if(isset($_POST['login'])){
	$userName = $_POST['username'];
	$password = $_POST['password'];


	$selectQuery = "select * from admin_panel where username='$userName'";


	$res = mysqli_query($con,$selectQuery);

	$checkres = mysqli_num_rows($res);

	if ($checkres) {

		$dbInfo = mysqli_fetch_assoc($res);

		$dbPassword = $dbInfo['password'];

		$_SESSION['name'] = $dbInfo['name'];

	     if ($password == $dbPassword) {
	        ?>
	        <script type="text/javascript">
	        	alert ("Login Successfull");
	        	location.replace("admin_panel.php");
	        </script>
           <?php

	     }
		
	}
}



?>