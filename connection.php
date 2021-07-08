<?php
$server = 'localhost'; 
$username = 'root';
$password = '';
$db = 'recruitment';

$con = mysqli_connect($server,$username,$password,$db);

if($con)
{
	echo"connect ok";
}
//else{
	//echo "no connect";
//}

?>