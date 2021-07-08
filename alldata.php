<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" type="text/css" href="bootstrap.css">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="style_display.css">

<!DOCTYPE html>
<html>
<head>
    <script src="jquery.js"></script>
	<title>All applicant data</title>
</head>
<body>
<!-- Header Part-->
	<header class="header">
		<div class="container">
			<div class="row">
				<div class="col-md-3" id="header-left">
					<img src="img/anzalogo.png" width="250" height="200">
				</div>

				<div class="col-md-9" id="header-right">
					<h5>Government of the People's Republic of Bangladesh</h5>
					<h1>Anza Corporation Ltd.</h1>
                    <h1>Admin Panel</h1>
				</div>


			</div>
			
		</div>
	</header>

     <nav class="nav">

     	<div class="container">
     		<div class="row">

     			<div class="col-md-3 nav1"><a href="admin_panel.php">Home</a></div>
     			<div class="col-md-3 nav1"><a href="#">Payment Status</a></div>
     			<div class="col-md-3 nav1"><a href="applicant_copy.php">Download Applycant Copy</a></div>
     			<div class="col-md-3 nav1"><a href="#">Admit Card</a></div>


     			
     		</div>
     	</div>
     	
     </nav>
      

      <div class='container admin-main'>

        <div class="row">
            
            <div class="col-md-5 menubar">
                <div class="row">
                    

              <div class="col-md-9 slidebar active">
                <ul>
                    <li><a href="">&nbsp &nbsp Applicant Form</a></li>
                    <li><a href="alldata.php">&nbsp &nbsp All Data</a></li>
                    <li><a href="update.php">&nbsp &nbsp Update Applicant Information</a></li>
                    <li><a href="updatabase.php">&nbsp &nbsp Update Database</a></li>
                    <li><a href="">&nbsp &nbsp Delete Applicant</a></li>
                    <li><a href="">&nbsp &nbsp Attendance Sheet</a></li>
                    <li><a href="">&nbsp &nbsp Upload Picture</a></li>
                    <li><a href="">&nbsp &nbsp Upload signature</a></li>
                </ul>
                </div>
                <div class="col-md-3 btn-m active-btn">
                    <button class="menu-btn"><span>MENU</span></button>
                    
                </div>
                </div>
            </div>


            <div class="col-md-7 right update-right">
                <div class="row">
                   
                   <div class="col-md-8">
                    <h3 class="wellcome">All applicant data is here. you can scroll data left-right or up-down for see full data.</h3>
                       
                   </div> 
                   <div class="col-md-4">
                     <button class="logout-btn"><a href="logout.php">Log out</a></button>                
                   </div>
                    </div>
                    <div class="col-md-12">
                    <input type="text" name ="search-box" class="normal-input" onkeyup="serchFun()" id="search-box" placeholder="Search for any name">
                    </div>

                    <div class="col-md-12">
                    <input type="text" name ="search-box-mobile" class="normal-input" onkeyup="searchMobile()" id="search-mobile" placeholder="Search for any mobileNumber">
                    </div>

                </div>






     <div class="container t-main toggle-table">
        <div class="row">
            <div class="col-md-12">
                <table class="table-display" id="data-table">

                    <?php
               include "connection.php";

               $query = "select * from applicant";

               $allData = mysqli_query($con,$query);

               $rowCount = mysqli_num_rows($allData);

               

                 ?>
                <thead class="thead">
                    <th>Sl</th>
                    <th>Name</th>
                    <th>Father_Name</th>
                    <th>Mother_Name</th>
                    <th>DOB</th>
                    <th>Gender</th>
                    <th>Nid</th>
                    <th>Religion</th>
                    <th>Marritial_Status</th>
                    <th>Quota</th>
                    <th>Care_Of(Prs.Add.)</th>
                    <th>Village(Prs.Add.)</th>
                    <th>District(Prs.Add.)</th>
                    <th>UpoZila(Prs.Add.)</th>
                    <th>Post Office(Prs.Add.)</th>
                    <th>Care Of(Prm.Add.)</th>
                    <th>Village(Prm.Add.)</th>
                    <th>District(Prs.Add.)</th>
                    <th>UpoZila(Prs.Add.)</th>
                    <th>Post Office(Prs.Add.)</th>
                    <th>Mobile</th>
                    <th>Email</th>

                    <th>Photo</th>
                    <th>Signature</th>

                    <th>SSC_Exam</th>
                    <th>SSC_Roll</th>
                    <th>SSC_Sub</th>
                    <th>SSC_Res</th>
                    <th>SSC_GPA</th>
                    <th>SSC_Board</th>
                    <th>SSC_Year</th>
                    
                    <th>HSC_Exam</th>
                    <th>HSC_Roll</th>
                    <th>HSC Sub</th>
                    <th>HSC_Res</th>
                    <th>HSC_GPA</th>
                    <th>HSC_Board</th>
                    <th>HSC_Year</th>
                                        


                </thead>

                   <?php
                  if($rowCount){

               $i=1;
               ?>

               <tr class="tr-display">
                <?php
               while ($res=mysqli_fetch_assoc($allData)) {
                ?>
                <td><?php echo $i ?></td>
                <td><?php echo $res['name'] ?></td>
                <td><?php echo $res['fname'] ?></td>
                <td><?php echo $res['mname'] ?></td>
                <td><?php echo $res['dob'] ?></td>
                <td><?php echo $res['gender'] ?></td>
                <td><?php echo $res['nid'] ?></td>
                <td><?php echo $res['religion'] ?></td>
                <td><?php echo $res['maritialstatus'] ?></td>
                <td><?php echo $res['quota'] ?></td>
                <td><?php echo $res['prs_care'] ?></td>
                <td><?php echo $res['prs_vil'] ?></td>
                <td><?php echo $res['prs_dist'] ?></td>
                <td><?php echo $res['prs_thana'] ?></td>
                <td><?php echo $res['prs_po'] ?></td>
                <td><?php echo $res['prm_care'] ?></td>
                <td><?php echo $res['prm_vil'] ?></td>
                <td><?php echo $res['prm_dist'] ?></td>
                <td><?php echo $res['prm_thana'] ?></td>
                <td><?php echo $res['prm_po'] ?></td>
                <td><?php echo $res['mobile'] ?></td>
                <td><?php echo $res['email'] ?></td>
                <td><img src="<?php echo $res['photo'] ?>" width="100px" height ="80px"></td>
                <td><img src="<?php echo $res['signature'] ?>" width="120px" height ="50px"></td>
                <td><?php echo $res['ssc_exam'] ?></td>
                <td><?php echo $res['ssc_roll'] ?></td>
                <td><?php echo $res['ssc_sub'] ?></td>
                <td><?php echo $res['ssc_res'] ?></td>
                <td><?php echo $res['ssc_gpa'] ?></td>
                <td><?php echo $res['ssc_board'] ?></td>
                <td><?php echo $res['ssc_year'] ?></td>
                <td><?php echo $res['hsc_exam'] ?></td>
                <td><?php echo $res['hsc_roll'] ?></td>
                <td><?php echo $res['hsc_sub'] ?></td>
                <td><?php echo $res['hsc_res'] ?></td>
                <td><?php echo $res['hsc_gpa'] ?></td>
                <td><?php echo $res['hsc_board'] ?></td>
                <td><?php echo $res['hsc_year'] ?></td>
                


                <?php
               $i=$i+1; ?>

                </tr><?php
                 }
                 } 
                 ?>

            
                </table>
            </div>
            
        </div>
         
     </div>




      

    <div class="container">
    	<div class="row">
    		<div class="col-md-12 sub-footer">
    			<p>For any inconvenience, please send email to anzacl2017@gmail.com</p>
    		</div>
    	</div>
    </div>


     <div class="container">
    	<div class="row">
    		<div class="col-md-12 footer">
    			<p>© 2020 Bangladesh Telecommunication Regulatory Commission, All Rights Reserved.</p>
    		</div>
    	</div>
    </div>



<script type="text/javascript">
    $(document).ready(function(){

        $('.t-main').srcollLeft();
        $('.t-main').srcollTop();

    })
</script>



<script type="text/javascript">
    $(document).ready(function(){

      $('.menu-btn').click(function(){
        $('.slidebar').toggleClass('active');
        $('.btn-m').toggleClass('active-btn');
        $('.btn-m').toggleClass('toggle');
        $('.right').toggleClass('update-right');

            $('.t-main').toggleClass('toggle-table');
    


      })


    })

    
</script>

<script type="text/javascript">
    function serchFun(){
        let fillter = document.getElementById('search-box').value.toUpperCase();
        let  myTable = document.getElementById('data-table');
        let tr = myTable.getElementsByTagName('tr');

        for(var i=0; i<tr.length;i++){
            let td = tr[i].getElementsByTagName('td')[1];
            if (td) {
                let textvalue = td.textContenet || td.innerHTML;
                if (textvalue.toUpperCase().indexOf(fillter)>-1) {
                    tr[i].style.display = "";
                }
                else{
                    tr[i].style.display = "none";
                }
            }
        }
    }



    function searchMobile(){
        let mobileFillter = document.getElementById('search-mobile').value;
        let table = document.getElementById('data-table');
        let mtr = table.getElementsByTagName('tr');
        for (var j = 0; j<mtr.length; j++) {
           let mtd = mtr[j].getElementsByTagName('td')[20];
           if (mtd) {
                let mobilevalue = mtd.textContenet || mtd.innerHTML;
                if (mobilevalue.indexOf(mobileFillter)>-1) {
                    mtr[j].style.display = "";
                }
                else{
                    mtr[j].style.display = "none";
                }
            }
        }
         }
 
   </script>




</body>
</html>