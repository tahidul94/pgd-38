<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" type="text/css" href="bootstrap.css">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="style_admin">

<!DOCTYPE html>
<html>
<head>
    <script src="jquery.js"></script>
	<title>applicant Form</title>
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

     			<div class="col-md-3 nav1"><a href="admin.php">Home</a></div>
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
                   
                   <div class="col-md-10">
                    <h3 class="wellcome">For Search any applicant information with userId or Mobile Number please give candidate User or mobile number</h3>
                       
                   </div> 
                   <div class="col-md-2">
                     <button class="logout-btn"><a href="logout.php">Log out</a></button>                
                   </div>

                   <div class="col-md-12">
                     <form class="login-form" action="admin_app_from_view.php" method="POST">

                        <h4>What information do you want to search for ? Select any one.</h4>
                    <div class="row radio-btn">
                         
                       
                        <div class="col-md-6">
                          <input type="radio" class="search-btn" value="mobile" name="search"> Mobile Number<br>           
                        </div>

                       <div class="col-md-6">
                         <input type="radio" class="search-btn" value="userid" name="search"> User Id<br>           
                        </div>
                    

                    </div>
                    
                    <div class="col-md-12 mobile-in">

                        
                        
                    </div>
                 
                
                
                 

                 
                 

    
               
             </form>  


                   </div>
                </div>
                
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

      $('.menu-btn').click(function(){
        $('.slidebar').toggleClass('active');
        $('.btn-m').toggleClass('active-btn');
        $('.btn-m').toggleClass('toggle');
        $('.right').toggleClass('update-right');
    


      })


$('.search-btn').click(function(){

        const search = $('[type="radio"]:checked').val();


        if (search=='mobile') {

            $('.mobile-in').html('<label class="">Mobile Number&nbsp&nbsp</label><input type="text" class="address-input" name="mobile"><br> <input type="submit" name="submit" class="login-btn login" value="Submit">')

        }

        else if (search=='userid') {
            $('.mobile-in').html('<label class="">User Id&nbsp&nbsp</label><input type="text" class="address-input" name="userid"><br> <input type="submit" name="submit" class="login-btn login" value="Submit">')
        }

        else {
         $('.mobile-in').html('')   
        }
        })




    })
</script>



</body>
</html>