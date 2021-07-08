<?php
 
 include "connection.php";

 if (isset($_POST['login'])) {

 	$userId = $_POST['userid'];
 	$password = $_POST['password'];



 	$userQuery = "select * from applicant where user_id='$userId'";

 	$checkUser = mysqli_query($con,$userQuery);

 	$userCount = mysqli_num_rows($checkUser);

 	if ($userCount) {
 		
 		$dbInfo = mysqli_fetch_assoc($checkUser);

 		$dbPassword = $dbInfo['password'];
        
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


 		





 		if ($password == $dbPassword) {



          //pdf part

 require('fpdf/fpdf.php');

$title = 'AnZa Corporation Ltd';


$pdf =  new FPDF('p','mm','A4');

$pdf -> AddPage();
$pdf -> SetTitle($title);


$pdf -> SetFont('Arial', 'B', 18);
$pdf -> SetTextColor(255,255,255,1);
$pdf -> SetFillColor(116, 185, 255,1);

$pdf -> cell(0,20,'',0,0,'',true);

$pdf -> Image('logo.png',20, 10, 30, 20);

$pdf -> cell(-60,10,$title,0,1,true);

$pdf -> SetFont('Arial', 'B', 13);

$pdf -> cell(0,10,'Govtment of the people Republic of Bangladesh',0,1,'C');

$pdf -> Ln(1);

$pdf -> SetTextColor(0, 0, 0,1);

$pdf -> SetFont('Arial', 'B', 12);

$pdf -> cell(70,5,'',0,0,'C');

$pdf -> cell(50,5,'Applicant Copy','Bt',1,'C');


$pdf -> SetFillColor(196, 204, 211,1);
$pdf -> SetFont('Arial', 'B', 10);
$pdf -> Ln(1);

$pdf -> cell(94,5,'User ID:'.$dbuserId,'0',0,'L',true);
$pdf -> cell(.5,5,'',0,0,'');

$pdf -> SetFillColor(222, 232, 242,1);
$pdf -> cell(94,5,'Password:'.$dbPassword,0,1,'L',true);
$pdf -> Ln(1);

$pdf -> cell(40,48,'',1,0,'');
$pdf -> cell(2,48,'',0,0,'');
$pdf -> cell(147,48,'',1,0,'');

$pdf -> Image($dbphoto,12, 48, 35, 40);



$pdf -> cell(1,1,'',0,1,'');
$pdf -> cell(43,3,'',0,0,'');

$pdf -> SetFillColor(196, 204, 211,1);
$pdf -> SetFont('Arial', '', 8);




$pdf -> cell(51,4,'Post Name',0,0,'',true);
$pdf -> cell(.5,4,'',0,0,'');
$pdf -> cell(93,4,'Computer Operator',0,1,'',true);



$pdf -> Ln(.2);
$pdf -> SetFillColor(222, 232, 242,1);
$pdf -> cell(43,4,'',0,0,'');

$pdf -> cell(51,4,'Applicant Name',0,0,'',true);
$pdf -> cell(.5,4,'',0,0,'');
$pdf -> cell(93,4,$dbname,0,1,'',true);






$pdf -> Ln(.2);
$pdf -> SetFillColor(196, 204, 211,1);
$pdf -> cell(43,4,'',0,0,'');

$pdf -> cell(51,4,'Father Name',0,0,'',true);
$pdf -> cell(.5,4,'',0,0,'');
$pdf -> cell(93,4,$dbfname,0,1,'',true);


$pdf -> Ln(.2);
$pdf -> SetFillColor(222, 232, 242,1);
$pdf -> cell(43,4,'',0,0,'');


$pdf -> cell(51,4,'Mother Name',0,0,'',true);
$pdf -> cell(.5,4,'',0,0,'');
$pdf -> cell(93,4,$dbmname,0,1,'',true);

$pdf -> Ln(.2);
$pdf -> SetFillColor(196, 204, 211,1);
$pdf -> cell(43,4,'',0,0,'');

$pdf -> cell(51,4,'Date of Birth',0,0,'',true);
$pdf -> cell(.5,4,'',0,0,'');
$pdf -> cell(93,4,$dbdob,0,1,'',true);


$pdf -> Ln(.2);
$pdf -> SetFillColor(222, 232, 242,1);
$pdf -> cell(43,4,'',0,0,'');


$pdf -> cell(51,4,'Contact Number',0,0,'',true);
$pdf -> cell(.5,4,'',0,0,'');
$pdf -> cell(93,4,$dbmobile,0,1,'',true);


$pdf -> Ln(.2);
$pdf -> SetFillColor(196, 204, 211,1);
$pdf -> cell(43,4,'',0,0,'');

$pdf -> cell(51,4,'Email',0,0,'',true);
$pdf -> cell(.5,4,'',0,0,'');
$pdf -> cell(93,4,$dbemail,0,1,'',true);


$pdf -> Ln(.2);
$pdf -> SetFillColor(222, 232, 242,1);
$pdf -> cell(43,4,'',0,0,'');


$pdf -> cell(51,4,'Gender',0,0,'',true);
$pdf -> cell(.5,4,'',0,0,'');
$pdf -> cell(93,4,$dbgender,0,1,'',true);



$pdf -> Ln(.2);
$pdf -> SetFillColor(196, 204, 211,1);
$pdf -> cell(43,4,'',0,0,'');

$pdf -> cell(51,4,'Religion',0,0,'',true);
$pdf -> cell(.5,4,'',0,0,'');
$pdf -> cell(93,4,$dbreligion,0,1,'',true);


$pdf -> Ln(.2);
$pdf -> SetFillColor(222, 232, 242,1);
$pdf -> cell(43,4,'',0,0,'');


$pdf -> cell(51,4,'Quota',0,0,'',true);
$pdf -> cell(.5,4,'',0,0,'');
$pdf -> cell(93,4,$dbquota,0,1,'',true);


$pdf -> Ln(.2);
$pdf -> SetFillColor(196, 204, 211,1);
$pdf -> cell(43,4,'',0,0,'');

$pdf -> cell(51,4,'Home District',0,0,'',true);
$pdf -> cell(.5,4,'',0,0,'');
$pdf -> cell(93,4,$dbprmDist,0,1,'',true);

$pdf -> Ln(3);

$pdf -> cell(94.5,10,'',1,0,'');
$pdf -> cell(.5,48,'',0,0,'');
$pdf -> cell(94,10,'',1,0,'');



$pdf -> cell(.5,.5,'',0,1,'');
$pdf -> cell(1,4,'',0,0,'');

$pdf -> SetFillColor(222, 232, 242,1);

$pdf -> cell(40,4,'National Id',0,0,'',true);
$pdf -> cell(.5,4,'',0,0,'');
$pdf -> cell(52,4,$dbnid,0,0,'',true);

$pdf -> cell(2,4,'',0,0,'');

$pdf -> SetFillColor(222, 232, 242,1);

$pdf -> cell(40,4,'Passport',0,0,'',true);
$pdf -> cell(.5,4,'',0,0,'');
$pdf -> cell(52,4,'no need',0,1,'',true);


$pdf -> cell(.5,.5,'',0,1,'');
$pdf -> cell(1,4,'',0,0,'');
$pdf -> SetFillColor(196, 204, 211,1);

$pdf -> cell(40,4,'Birth Registration',0,0,'',true);
$pdf -> cell(.5,4,'',0,0,'');
$pdf -> cell(52,4,'No Need',0,0,'',true);



$pdf -> cell(2,4,'',0,0,'');

$pdf -> SetFillColor(196, 204, 211,1);

$pdf -> cell(40,4,'Maritial Status',0,0,'',true);
$pdf -> cell(.5,4,'',0,0,'');
$pdf -> cell(52,4,$dbmarry,0,1,'',true);


$pdf -> Ln(1);

$pdf -> cell(50,5,'Address Informartion:',0,1);

$pdf -> Ln(.1);

$pdf -> cell(94,26,'',1,0);
$pdf -> cell(1,26,'',0,0);
$pdf -> cell(94,26,'',1,0);


$pdf -> cell(.5,.5,'',0,1,'');
$pdf -> cell(1,4,'',0,0,'');

$pdf -> SetFillColor(222, 232, 242,1);

$pdf -> cell(92,4,'Present Address',0,0,'',true);

$pdf -> cell(3,4,'',0,0,'');

$pdf -> SetFillColor(222, 232, 242,1);

$pdf -> cell(92,4,'Parmanent Address',0,1,'',true);


$pdf -> Ln(.2);
$pdf -> cell(1,4,'',0,0,'');
$pdf -> SetFillColor(196, 204, 211,1);


$pdf -> cell(40,4,'Care of',0,0,'',true);
$pdf -> cell(.5,4,'',0,0,'');
$pdf -> cell(51.5,4,$dbprsCare,0,0,'',true);

$pdf -> cell(3,4,'',0,0,'');
$pdf -> cell(40,4,'Care of',0,0,'',true);
$pdf -> cell(.5,4,'',0,0,'');
$pdf -> cell(51.5,4,$dbprmCare,0,1,'',true);



$pdf -> Ln(.2);
$pdf -> SetFillColor(222, 232, 242,1);
$pdf -> cell(1,4,'',0,0,'');
$pdf -> cell(40,4,'Village/House',0,0,'',true);
$pdf -> cell(.5,4,'',0,0,'');
$pdf -> cell(51.5,4,$dbprsVil,0,0,'',true);

$pdf -> cell(3,4,'',0,0,'');
$pdf -> cell(40,4,'Village',0,0,'',true);
$pdf -> cell(.5,4,'',0,0,'');
$pdf -> cell(51.5,4,$dbprmVil,0,1,'',true);



$pdf -> Ln(.2);
$pdf -> SetFillColor(196, 204, 211,1);
$pdf -> cell(1,4,'',0,0,'');
$pdf -> cell(40,4,'District',0,0,'',true);
$pdf -> cell(.5,4,'',0,0,'');
$pdf -> cell(51.5,4,$dbprsDist,0,0,'',true);

$pdf -> cell(3,4,'',0,0,'');
$pdf -> cell(40,4,'District',0,0,'',true);
$pdf -> cell(.5,4,'',0,0,'');
$pdf -> cell(51.5,4,$dbprmDist,0,1,'',true);


$pdf -> Ln(.2);
$pdf -> SetFillColor(222, 232, 242,1);
$pdf -> cell(1,4,'',0,0,'');
$pdf -> cell(40,4,'Thana',0,0,'',true);
$pdf -> cell(.5,4,'',0,0,'');
$pdf -> cell(51.5,4,$dbprsThana,0,0,'',true);

$pdf -> cell(3,4,'',0,0,'');
$pdf -> cell(40,4,'Thana',0,0,'',true);
$pdf -> cell(.5,4,'',0,0,'');
$pdf -> cell(51.5,4,$dbprmThana,0,1,'',true);


$pdf -> Ln(.2);
$pdf -> SetFillColor(196, 204, 211,1);
$pdf -> cell(1,4,'',0,0,'');
$pdf -> cell(40,4,'Post Office',0,0,'',true);
$pdf -> cell(.5,4,'',0,0,'');
$pdf -> cell(51.5,4,$dbprsPo,0,0,'',true);

$pdf -> cell(3,4,'',0,0,'');
$pdf -> cell(40,4,'District',0,0,'',true);
$pdf -> cell(.5,4,'',0,0,'');
$pdf -> cell(51.5,4,$dbprmPo,0,1,'',true);


$pdf -> Ln(5);

$pdf -> cell(50,5,'Educational Qualification:',0,1);
$pdf -> cell(189,23,'',1,0);
$pdf -> cell(1,.5,'',0,1);


$pdf -> SetFillColor(196, 204, 211,1);
$pdf -> cell(1,5,'',0,0);
$pdf -> cell(38,4,'Examination',0,0,'',true);
$pdf -> cell(.3,5,'',0,0);
$pdf -> cell(38,4,'Board/Institiute',0,0,'',true);
$pdf -> cell(.3,5,'',0,0);
$pdf -> cell(38,4,'Group',0,0,'',true);
$pdf -> cell(.3,5,'',0,0);
$pdf -> cell(30,4,'Result',0,0,'',true);
$pdf -> cell(.3,5,'',0,0);
$pdf -> cell(20,4,'Year',0,0,'',true);
$pdf -> cell(.3,5,'',0,0);
$pdf -> cell(22,4,'Roll',0,1,'',true);
$pdf ->Ln(.5);

$pdf -> SetFillColor(222, 232, 242,1);
$pdf -> cell(1,5,'',0,0);
$pdf -> cell(38,4,$dbsscExam,0,0,'',true);
$pdf -> cell(.3,5,'',0,0);
$pdf -> cell(38,4,$dbsscBoard,0,0,'',true);
$pdf -> cell(.3,5,'',0,0);
$pdf -> cell(38,4,$dbsscSub,0,0,'',true);
$pdf -> cell(.3,5,'',0,0);
$pdf -> cell(30,4,$dbsscRes,0,0,'',true);
$pdf -> cell(.3,5,'',0,0);
$pdf -> cell(20,4,$dbsscYear,0,0,'',true);
$pdf -> cell(.3,5,'',0,0);
$pdf -> cell(22,4,$dbsscRoll,0,1,'',true);
$pdf ->Ln(.5);

$pdf -> SetFillColor(196, 204, 211,1);
$pdf -> cell(1,5,'',0,0);
$pdf -> cell(38,4,$dbhscExam,0,0,'',true);
$pdf -> cell(.3,5,'',0,0);
$pdf -> cell(38,4,$dbhscBoard,0,0,'',true);
$pdf -> cell(.3,5,'',0,0);
$pdf -> cell(38,4,$dbhscSub,0,0,'',true);
$pdf -> cell(.3,5,'',0,0);
$pdf -> cell(30,4,$dbhscRes,0,0,'',true);
$pdf -> cell(.3,5,'',0,0);
$pdf -> cell(20,4,$dbhscYear,0,0,'',true);
$pdf -> cell(.3,5,'',0,0);
$pdf -> cell(22,4,$dbhscRoll,0,1,'',true);
$pdf -> cell(.3,5,'',0,0);
$pdf ->Ln(.5);

$pdf -> SetFillColor(222, 232, 242,1);
$pdf -> cell(1,5,'',0,0);
$pdf -> cell(38,4,$dbhscExam,0,0,'',true);
$pdf -> cell(.3,5,'',0,0);
$pdf -> cell(38,4,$dbhscBoard,0,0,'',true);
$pdf -> cell(.3,5,'',0,0);
$pdf -> cell(38,4,$dbhscSub,0,0,'',true);
$pdf -> cell(.3,5,'',0,0);
$pdf -> cell(30,4,$dbhscRes,0,0,'',true);
$pdf -> cell(.3,5,'',0,0);
$pdf -> cell(20,4,$dbhscYear,0,0,'',true);
$pdf -> cell(.3,5,'',0,0);
$pdf -> cell(22,4,$dbhscRoll,0,1,'',true);
$pdf -> cell(.3,5,'',0,0);
$pdf ->Ln(.5);

$pdf -> SetFillColor(196, 204, 211,1);
$pdf -> cell(1,5,'',0,0);
$pdf -> cell(38,4,$dbhscExam,0,0,'',true);
$pdf -> cell(.3,5,'',0,0);
$pdf -> cell(38,4,$dbhscBoard,0,0,'',true);
$pdf -> cell(.3,5,'',0,0);
$pdf -> cell(38,4,$dbhscSub,0,0,'',true);
$pdf -> cell(.3,5,'',0,0);
$pdf -> cell(30,4,$dbhscRes,0,0,'',true);
$pdf -> cell(.3,5,'',0,0);
$pdf -> cell(20,4,$dbhscYear,0,0,'',true);
$pdf -> cell(.3,5,'',0,0);
$pdf -> cell(22,4,$dbhscRoll,0,1,'',true);
$pdf -> cell(.3,5,'',0,0);


$pdf -> Output();




//------------






 			
 			echo $dbname ;
 		}

 		else{
 			echo "password wrong";
 		}
 	}

 	else{
 		echo "user id wrong";
 	}




 	

 }


?>