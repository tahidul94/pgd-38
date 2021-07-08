<?php

include "connection.php";

if (isset($_POST['submit'])) {
	require('fpdf/fpdf.php');

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

date_default_timezone_set('asia/dhaka');


   //$datetime = date("Y-m-d h:i:s a");
   $date = date("Y-m-d");
   $time = date("h:i:s a");
   $plastDate = date("Y-m-d",strtotime($date.'+3days'));

   $plastTime = $time;
   //$plast_datetime = date("Y-m-d h:i:s a",strtotime($datetime.'+3days'));


//user id part


function checkkeys($con,$userId){

  $userQuery = "select * from applicant";

  $userQueryRun = mysqli_query($con,$userQuery);

  while($row = mysqli_fetch_assoc($userQueryRun))
  {
    if ($row['user_id'] == $userId)
     {
      $userExists = true;
      break;
    }

    else{
      $userExists = false;
    }

  }

  return $userExists;

}


function generateKey($con){
  $userLength = 8;
  $str = "ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";

  $userId = substr(str_shuffle($str), 0, $userLength);

  $checkkey = checkkeys($con,$userId);

  while ($checkkey == true) {
    $userId = substr(str_shuffle($str), 0, $userLength);
    $checkkey = checkkeys($con,$userId);
  }

return $userId;

}

$user = generateKey($con);


//password part


$passwordLength = 6;
  $str = "1234567890";

  $userPassword = substr(str_shuffle($str), 0, $passwordLength);


//photo


    $photoFile = $_FILES['photo'];

    $fileName = $photoFile['name'];
    $filePath = $photoFile['tmp_name'];
    $fileError = $photoFile['error'];

    if($fileError==0){
	$destFile = 'upload/'.$fileName;

	move_uploaded_file($filePath,$destFile);
}

//signature



    $signFile = $_FILES['sign'];

    $signName = $signFile['name'];
    $signPath = $signFile['tmp_name'];
    $signError = $signFile['error'];

    if($signError==0){
  $signdestFile = 'upload/'.$signName;

  move_uploaded_file($signPath,$signdestFile);
}







//pdf part
/*
	$title = 'Applicant Copy';



$pdf =  new FPDF();

$pdf -> AddPage();
$pdf -> SetTitle($title);


$pdf -> SetFont('Arial', '', 12);

//$pdf -> Cell(0, 10, $title, 1, 1, 'C');
$w = $pdf -> GetStringwidth($title) +6;

$pdf -> SetX((210-$w)/2);

$pdf -> SetDrawColor(221,221,221,1);
$pdf -> SetFillColor(10,158,0,1);
$pdf -> SetTextColor(255,255,255,1);

$pdf -> SetLineWidth(1);

$pdf -> Cell($w,9,$title, 1, 1, 'C',true);


$pdf -> Ln(10);

$pdf -> SetTextColor(0,0,0,1);

$w = $pdf -> GetStringwidth($name)+26;

$pdf -> SetX((170-$w)/2);
$pdf -> cell(40,10,'Name:', 1, 0,'C');
$pdf -> cell($w,10, $name, 1, 1,'C');

$pdf -> SetX((170-$w)/2);
$pdf -> cell(40,10,'Mobile:', 1, 0,'C');
$pdf -> cell($w,10, $mobile, 1, 1,'C');


$pdf -> SetX((170-$w)/2);
$pdf -> cell(40,10,'Father name:', 1, 0,'C');
$pdf -> cell($w,10, $fname, 1, 1,'C');


$pdf -> SetX((170-$w)/2);
$pdf -> cell(40,10,'MOther name:', 1, 0,'C');
$pdf -> cell($w,10, $mname, 1, 1,'C');


$pdf -> SetX((170-$w)/2);
$pdf -> cell(40,10,'Email:', 1, 0,'C');
$pdf -> cell($w,10, $email, 1, 1,'C');


$pdf -> Image($destFile, 170, 30, 30, 30);



$pdf -> Output();
*/
//------------








 $insertQuery = " insert into applicant (name,fname,mname,dob,gender,nid,religion,maritialstatus,quota,prs_care,prs_vil,prs_dist,prs_thana,prs_po,prm_care,prm_vil,prm_dist,prm_thana,prm_po,mobile,cmobile,email,ssc_exam,ssc_roll,ssc_board,ssc_sub,ssc_res,ssc_gpa,ssc_year,hsc_exam,hsc_roll,hsc_board,hsc_sub,hsc_res,hsc_gpa,hsc_year,user_id,password,photo,signature,submit_date,submit_time,payment_last_date,payment_last_time)

  values('$name','$fname','$mname','$dob','$gender','$nid','$religion','$marry','$quota','$prsCare','$prsVil','$prsDist','$prsThana','$prsPo','$prmCare','$prmVil','$prmDist','$prmThana','$prmPo','$mobile','$cmobile','$email','$sscExam','$sscRoll','$sscBoard','$sscSub','$sscRes','$sscGpa','$sscYear','$hscExam','$hscRoll','$hscBoard','$hscSub','$hscRes','$hscGpa','$hscYear','$user','$userPassword','$destFile','$signdestFile','$date','$time','$plastDate','$plastTime')";


//$insertQuery = " insert into applicant (name,fname,mname,dob,gender,nid,religion,maritialstatus) values('$name','$fname','$mname','$dob','$gender','$nid','$religion','$marry')";



  




   $query = mysqli_query($con,$insertQuery);


if ($query) {
     

$userQuery = "select * from applicant where user_id='$user'";

  $checkUser = mysqli_query($con,$userQuery);

  $userCount = mysqli_num_rows($checkUser);

  if ($userCount) {
    
    $dbInfo = mysqli_fetch_assoc($checkUser);

    $dbName= $dbInfo['name'];
    $dbUser = $dbInfo['user_id'];
    $dbPassword = $dbInfo['password'];
     $dblastpaymentdate = $dbInfo['payment_last_date'];
     $dblastpaymenttime = $dbInfo['payment_last_time'];
}



//pdf

$title = 'AnZa Corporation Ltd';


$pdf =  new FPDF();

$pdf -> AddPage();
$pdf -> SetTitle($title);


$pdf -> SetFont('Arial', 'B', 18);
$pdf -> SetTextColor(255,255,255,1);
$pdf -> SetFillColor(116, 185, 255,1);

$pdf -> cell(0,20,'',0,0,'',true);

$pdf -> Image('logo.png',20, 10, 30, 20);

$pdf -> cell(-60,10,$title,0,1,true);

$pdf -> cell(0,10,'Govt. Republic of Bangladesh',0,1,'C');

$pdf -> Ln(10);

$pdf -> SetTextColor(237, 47, 14,1);

$pdf -> cell(0,10,'Hlw  '.$dbName,0,1,'C');


$pdf -> cell(0,10,'Your Application has been Submited Successfully',0,1,'C');


$pdf -> cell(0,10,'Your User Id is :  '.$dbUser,0,1,'C');
$pdf -> cell(0,10,'Your Password is :  '.$dbPassword,0,1,'C');

$pdf -> SetFont('Arial', '', 12);
//$pdf -> cell(0,10,'Pay your fees within the next three days to complete your application correctly.

//',0,1,'C');

$pdf -> cell(0,10,' the application fee payment within '.$dblastpaymentdate.' '.$dblastpaymenttime.'[YYYY-MM-DD hrs:min:sec]' ,0,1,'C');


$pdf -> cell(0,10,'Collect your userid and password. Click applicant copy option and login for your application id',0,1,'C');



$pdf -> Output();

}

   else{
?>
	<script type="text/javascript">
		alert("sorry no submit");
	</script>
	<?php

   }

}


?>