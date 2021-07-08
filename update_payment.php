<?php
include "connection.php";

if (isset($_POST['payment_status'])) {

	$query = "select * from applicant where payment_status != 'active' ";

    $res = mysqli_query($con,$query);
    date_default_timezone_set('asia/dhaka');
    if ($res){
    	 $i =1;
       while ($data = mysqli_fetch_assoc($res)) {

       	       $lastDate = $data['payment_last_date'];
       	       $lastTime = $data['payment_last_time'];

       	       $id = $data['id'];

       	       $tdate = date(strtotime(date("Y-m-d")));
       	       $ttime = date(strtotime(date("h:i:s a")));

       	       $ldate = date(strtotime($lastDate));
       	       $ltime = date(strtotime($lastTime));

                $difdate = ($tdate-$ldate)/3600;
                $diftime = ($ttime-$ltime)/3600;

                echo $difdate . "<br>";
                echo $diftime . "<br>";

                 if ($difdate == 0 && $diftime >= 0 ){

                 	$updateQuery = " update applicant set payment_status= 'time over' where id = $id ";
                 	$resq = mysqli_query($con,$updateQuery);
                 	if ($resq){
                 	echo"t ok";
                 	}
                 	else
                 	{
                 		echo"t not ok";
                 	}
                 }

       	          elseif($difdate > 0) {
       	          	$updateQuery = " update applicant set payment_status='time over' where id = $id";
       	          	$resq = mysqli_query($con,$updateQuery);
       	          	if ($resq){
                 	echo"d ok";
                 	}
                 	else
                 	{
                 		echo"d not ok";
                 	}
       	          }

       	          else{
       	          		echo "not done<br>";

       	          }

       	         

}



}


//$creatQuery = "create table time_over select * from applicant where payment_status='time over'";

$creatQuery = "insert into time_over select * from applicant where payment_status='time over'";

mysqli_query($con,$creatQuery);




}





?>