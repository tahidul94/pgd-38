
<?php
session_start();
?>  
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" type="text/css" href="bootstrap.css">
<link rel="stylesheet" type="text/css" href="style.css">

<!DOCTYPE html>
<html>
<head>
	<title>admin User</title>
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

     			<div class="col-md-3 nav1"><a href="index.php">Home</a></div>
     			<div class="col-md-3 nav1"><a href="#">Payment Status</a></div>
     			<div class="col-md-3 nav1"><a href="applicant_copy.php">Download Applycant Copy</a></div>
     			<div class="col-md-3 nav1"><a href="#">Admit Card</a></div>


     			
     		</div>
     	</div>
     	
     </nav>





      <div class="">
          
         <div class="container main">
            <div class="row">
                <div class="col-md-6 offset-md-3">


                     <form class="login-form" action="insert_admin.php" method="POST">

                        <h4>Please Sir Log in your admin panel</h4>
                    <div class="row">
                         

                        <div class="col-md-4">
                          <label class="login-label">user Name</label>           
                        </div>

                       <div class="col-md-8">
                         <input type="text" class="address-input" name="username"><br>           
                        </div>


                        <div class="col-md-4">
                          <label class="login-label">Password</label>
                        </div>

                       <div class="col-md-8">
                          <input type="Password" class="address-input" name="password"><br>
                        </div>


                    </div>
                 
                 
                
                
                 

                 
                 <input type="submit" name="login" class="login-btn login" value="Login">

    
               
             </form>  

         
                    
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





</body>
</html>