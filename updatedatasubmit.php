<?php
session_start();
include "connection.php";

if (isset($_POST['upgrade'])) {
   $userId = $_SESSION['userid'];
   $name = $_POST['name'];
   $fname = $_POST['fname'];
   $mname = $_POST['mname'];
   $dob = $_POST['dob'];
   $gender = $_POST['gender'];
   $nid = $_POST['nid'];
   $religion = $_POST['religion'];
   $marry = $_POST['marry'];
   $quota = $_POST['quota'];

   $prsCare = $_POST['prs_care'];
   $prsVil = $_POST['prs_vil'];
   $prsDist = $_POST['prs_dist'];
   $prsThana = $_POST['prs_thana'];
   $prsPo = $_POST['prs_po'];

   $prmCare = $_POST['prm_care'];
   $prmVil = $_POST['prm_vil'];
   $prmDist = $_POST['prm_dist'];
   $prmThana = $_POST['prm_thana'];
   $prmPo = $_POST['prm_po'];

   $mobile = $_POST['mobile'];
   $cmobile = $_POST['cmobile'];
   $email = $_POST['email'];

   $sscExam = $_POST['ssc_exam'];
   $sscRoll = $_POST['ssc_roll'];
   $sscBoard = $_POST['ssc_board'];
   $sscSub = $_POST['ssc_sub'];
   $sscRes = $_POST['ssc_res'];
   $sscGpa = $_POST['ssc_gpa'];
   $sscYear = $_POST['ssc_year'];

   $hscExam = $_POST['hsc_exam'];
   $hscRoll = $_POST['hsc_roll'];
   $hscBoard = $_POST['hsc_board'];
   $hscSub = $_POST['hsc_sub'];
   $hscRes = $_POST['hsc_res'];
   $hscGpa = $_POST['hsc_gpa'];
   $hscYear = $_POST['hsc_year'];

   echo "all data get";




   // $query = " UPDATE `applicant` SET `id`=[''],`name`=['$name'],`fname`=['$fname'],`mname`=['$mname'],`dob`=[value-5],`gender`=[value-6],`nid`=[value-7],`religion`=[value-8],`maritialstatus`=[value-9],`quota`=[value-10],`prs_care`=[value-11],`prs_vil`=[value-12],`prs_dist`=[value-13],`prs_thana`=[value-14],`prs_po`=[value-15],`prm_care`=[value-16],`prm_vil`=[value-17],`prm_dist`=[value-18],`prm_thana`=[value-19],`prm_po`=[value-20],`mobile`=[value-21],`cmobile`=[value-22],`email`=[value-23],`photo`=[value-24],`signature`=[value-25],`ssc_exam`=[value-26],`ssc_roll`=[value-27],`ssc_board`=[value-28],`ssc_sub`=[value-29],`ssc_res`=[value-30],`ssc_gpa`=[value-31],`ssc_year`=[value-32],`hsc_exam`=[value-33],`hsc_roll`=[value-34],`hsc_board`=[value-35],`hsc_sub`=[value-36],`hsc_res`=[value-37],`hsc_year`=[value-38],`token`=[value-39],`app_id`=[value-40],`status`=[value-41],`hsc_gpa`=[value-42],`user_id`=[value-43],`password`=[value-44],`submit_date`=[value-45],`submit_time`=[value-46],`payment_last_date`=[value-47],`payment_last_time`=[value-48],`payment_status`=[value-49] WHERE user_id='$userId'";




$updateQuery = " update applicant set name= '$name' where user_id='$userId'";

$update = mysqli_query($con,$updateQuery);





if ($update) {
   echo "update ok";
}

else {
   echo"update not done";
}

}



else
{
	echo" no connect and upgrade not complete";
}




?>