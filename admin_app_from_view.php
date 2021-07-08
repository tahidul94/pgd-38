
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" type="text/css" href="bootstrap.css">
<link rel="stylesheet" type="text/css" href="">
<link rel="stylesheet" type="text/css" href="style_view.css">
<script src="jquery.js"></script>

	<title></title>
</head>
<body>


<?php
session_start();
include "connection.php";

if (isset($_POST['submit'])) {
$search = $_POST['search'];

if ($search =='mobile') {
	$smobile = $_POST['mobile'];
	$suserid = 0;
}

else if ($search =='userid'){
    $suserid = $_POST['userid'];
	$smobile = 0;	
}


if ($smobile ==0 ) {

	$query = "select * from applicant where user_id='$suserid'";
}

else if($suserid ==0) {

	$query = "select * from applicant where mobile='$smobile'";
}


$selectInfo = mysqli_query($con,$query);
$row = mysqli_num_rows($selectInfo);


if ($row) {
	
$dbInfo = mysqli_fetch_assoc($selectInfo);

$dbname = $dbInfo['name'];

$dbfname = $dbInfo['fname'];
 		$dbmname = $dbInfo['mname'];
 		$dbdob = $dbInfo['dob'];
 		$dbgender = $dbInfo['gender'];
 		$dbnid = $dbInfo['nid'];
 		$dbreligion = $dbInfo['religion'];
 		$dbmarry = $dbInfo['maritialstatus'];
 		$dbquota = $dbInfo['quota'];

 		$dbprsCare = $dbInfo['prs_care'];
 		$dbprsVil = $dbInfo['prs_vil'];
 		$dbprsDist = $dbInfo['prs_dist'];
 		$dbprsThana = $dbInfo['prs_thana'];
 		$dbprsPo = $dbInfo['prs_po'];

 		$dbprmCare = $dbInfo['prm_care'];
 		$dbprmVil = $dbInfo['prm_vil'];
 		$dbprmDist = $dbInfo['prm_dist'];
 		$dbprmThana = $dbInfo['prm_thana'];
 		$dbprmPo = $dbInfo['prm_po'];

 		$dbmobile = $dbInfo['mobile'];
 		$dbcmobile = $dbInfo['cmobile'];
 		$dbemail = $dbInfo['email'];
 		$dbphoto = $dbInfo['photo'];
 		$dbsign = $dbInfo['signature'];

 		$dbsscExam = $dbInfo['ssc_exam'];
 		$dbsscRoll = $dbInfo['ssc_roll'];
 		$dbsscBoard = $dbInfo['ssc_board'];
 		$dbsscSub = $dbInfo['ssc_sub'];
 		$dbsscRes = $dbInfo['ssc_res'];
 		$dbsscGpa = $dbInfo['ssc_gpa'];
 		$dbsscYear = $dbInfo['ssc_year'];

 		$dbhscExam = $dbInfo['hsc_exam'];
 		$dbhscRoll = $dbInfo['hsc_roll'];
 		$dbhscBoard = $dbInfo['hsc_board'];
 		$dbhscSub = $dbInfo['hsc_sub'];
 		$dbhscRes = $dbInfo['hsc_res'];
 		$dbhscGpa = $dbInfo['hsc_gpa'];
 		$dbhscYear = $dbInfo['hsc_year'];

 		$dbuserId = $dbInfo['user_id'];
 		$dbpassword = $dbInfo['password'];
 		$dbsubmitdate = $dbInfo['submit_date'];


}
else{
	echo " NO data found";
}

}

else {
	echo "no submit";
}

?>



	<div class="container">
		
		<div class="row">
			<div class="main-view">
			<div class="col-md-12 head">
				<div class="row">
			<div class="col-md-3">
			<img src="img/anzalogo.png" width="250" height="200"> 
			</div>
			<div class="col-md-6 head-right">
				<h5>Government of the People's Republic of Bangladesh</h5>
					<h1>Anza Corporation Ltd.</h1>
                    <h1>Admin Panel</h1>

		</div>
        <div class="col-md-3 photo">
       	<img src="<?php echo$dbphoto ?>" width="200" height="150"> 
       </div>


		</div>
		</div>

        
            <div class="container">
           <div class="row">
           	<div class="col-md-12 add-head"><br>Applicant Details Information<br><br></div>
           	<div class="col-md-12 tr1"> Applicant Basic Informatin</div>

           	<div class="col-md-3 tr1">User Id:</div><div class="col-md-3 tr1"><?php echo$dbuserId ?></div><div class="col-md-3 tr1">Password:</div><div class="col-md-3 tr1"><?php echo$dbpassword ?></div>

           	<div class="col-md-3 tr1">Post Name:</div><div class="col-md-9 tr1">Computer Operator</div>
           	<div class="col-md-3 tr1">Payment Status:</div><div class="col-md-3 tr1">Active</div><div class="col-md-3 tr1">Application Submit Date:</div><div class="col-md-3 tr1"><?php echo$dbsubmitdate ?>(yy-mm-dd)</div>

           	<div class="col-md-3 tr1">Applicant Name:</div><div class="col-md-9 tr1"><?php echo$dbname ?></div>
           	<div class="col-md-2 tr1">Father Name:</div><div class="col-md-4 tr1"><?php echo$dbfname ?></div><div class="col-md-2 tr1">Mother Name:</div><div class="col-md-4 tr1"><?php echo$dbmname?></div>

            <div class="col-md-3 tr1">Religion:</div><div class="col-md-3 tr1"><?php echo$dbreligion ?></div><div class="col-md-3 tr1">Gender:</div><div class="col-md-3 tr1"><?php echo$dbgender ?></div>
            <div class="col-md-3 tr1">Maritial Status:</div><div class="col-md-3 tr1"><?php echo$dbmarry ?></div><div class="col-md-3 tr1">National Id:</div><div class="col-md-3 tr1"><?php echo$dbnid ?></div>

               <div class="col-md-12">&nbsp<br><br></div>
            <div class="col-md-12 add">Applicant Address</div>

            <div class="col-md-6 add">Present Address</div><div class="col-md-6 add">Parmanent Address</div>
            <div class="col-md-3 add">Care Of:</div><div class="col-md-3 add"><?php echo$dbprsCare ?></div><div class="col-md-3 add">Care Of:</div><div class="col-md-3 add"><?php echo$dbprmCare ?></div>
            <div class="col-md-3 add">Village/home:</div><div class="col-md-3 add"><?php echo$dbprsVil ?></div><div class="col-md-3 add">Village/Home:</div><div class="col-md-3 add"><?php echo$dbprmVil ?></div>
            <div class="col-md-3 add">District:</div><div class="col-md-3 add"><?php echo$dbprsDist ?></div><div class="col-md-3 add">District:</div><div class="col-md-3 add"><?php echo$dbprmDist ?></div>
            <div class="col-md-3 add">Thana:</div><div class="col-md-3 add"><?php echo$dbprsThana ?></div><div class="col-md-3 add">Thana:</div><div class="col-md-3 add"><?php echo$dbprmThana ?></div>
            <div class="col-md-3 add">Post Office:</div><div class="col-md-3 add"><?php echo$dbprsPo ?></div><div class="col-md-3 add">Post Office:</div><div class="col-md-3 add"><?php echo$dbprmPo ?></div>

                           <div class="col-md-12">&nbsp<br><br></div>
            <div class="col-md-12 add">Educational Qualification</div>

            <div class="col-md-6 add"> Secondary Education </div><div class="col-md-6 add">Higher Seceondary Education</div>
            <div class="col-md-3 add">Exam:</div><div class="col-md-3 add"><?php echo$dbsscExam ?></div><div class="col-md-3 add">Exam</div><div class="col-md-3 add"><?php echo$dbhscExam ?></div>
            <div class="col-md-3 add">Roll:</div><div class="col-md-3 add"><?php echo$dbsscRoll ?></div><div class="col-md-3 add">Roll:</div><div class="col-md-3 add"><?php echo$dbhscRoll ?></div>
            <div class="col-md-3 add">Subject</div><div class="col-md-3 add"><?php echo$dbsscSub ?></div><div class="col-md-3 add">Subject:</div><div class="col-md-3 add"><?php echo$dbhscSub ?></div>
            <div class="col-md-3 add">Result:</div><div class="col-md-3 add"><?php echo$dbsscRes ?></div><div class="col-md-3 add">Result:</div><div class="col-md-3 add"><?php echo$dbhscRes ?></div>
            <div class="col-md-3 add">Board:</div><div class="col-md-3 add"><?php echo$dbsscBoard ?></div><div class="col-md-3 add">Board:</div><div class="col-md-3 add"><?php echo$dbhscBoard ?></div>

            <div class="col-md-3 add">Year:</div><div class="col-md-3 add"><?php echo$dbsscYear ?></div><div class="col-md-3 add">Year:</div><div class="col-md-3 add"><?php echo$dbhscYear ?></div>

            <div class="col-md-12">&nbsp<br><br></div>
           <div class="offset-md-9 col-md-3"><img src="<?php echo$dbsign ?>" width="150" height="100"> </div>
           

             </div>
             </div>
               
           
                	
               
        




		</div>
	</div>
	
</div>



</body>
</html>
