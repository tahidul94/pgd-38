
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" type="text/css" href="bootstrap.css">
<link rel="stylesheet" type="text/css" href="style.css">

	<title>apply from</title>

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


     <!--Navigation part end-->
      <div class="container form-main">
      <form class="form" action="insert.php" method="POST" enctype="multipart/form-data">
      <div class="container">
        <div class="row">
            
            <div class="col-md-3 form-head">
                Name of the post
            </div>
            <div class="col-md-1 form-head">
                <p class="pp">:</p>
            </div>
             <div class="col-md-8 form-head">
                <p>Assistant Director ( Technical ) (Grade-9)</p>
            </div>


             <div class="col-md-3 input-label">
             Applicant Name   
            </div>
            <div class="col-md-1 input-label">
                <p class="pp">:</p>
            </div>
             <div class="col-md-8">
                <input type="text" name="name" class="normal-input" required="" style="text-transform: uppercase">
            </div>


             <div class="col-md-3 input-label">
             Father Name   
            </div>
            <div class="col-md-1 input-label">
                <p class="pp">:</p>
            </div>
             <div class="col-md-8">
                <input type="text" name="fname" class="normal-input" required="" style="text-transform: uppercase">
            </div>

              <div class="col-md-3 input-label">
             Mother Name   
            </div>
            <div class="col-md-1 input-label">
                <p class="pp">:</p>
            </div>
             <div class="col-md-8">
                <input type="text" name="mname" class="normal-input" required="" style="text-transform: uppercase">
            </div>


             <div class="col-md-3 input-label">
             Date of Birth   
            </div>
            <div class="col-md-1 input-label">
                <p class="pp">:</p>
            </div>
             <div class="col-md-8">
                <input type="Date" name="dob" class="normal-input" required="" id="birth-date">
            </div>


            <div class="col-md-3 input-label">
             Gender   
            </div>
            <div class="col-md-1 input-label">
                <p class="pp">:</p>
            </div>
             <div class="col-md-8">
                <select class="normal-input" id="gender" onclick="calculate_age()" name="gender">
                    <option value="">Select Here</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>



              <div class="col-md-3 input-label">
             NID no   
            </div>
            <div class="col-md-1 input-label">
                <p class="pp">:</p>
            </div>
             <div class="col-md-8">
                <input type="text" name="nid" class="normal-input">
            </div>
            

           <div class="col-md-3 input-label">
             Religion   
            </div>
            <div class="col-md-1 input-label">
                <p class="pp">:</p>
            </div>
             <div class="col-md-8">
                <select class="normal-input" id="religion" name="religion">
                    <option>Select Here</option>
                    <option>Islam</option>
                    <option>Hindu</option>
                    <option>Boudist</option>
                    <option>Chirstian</option>
                </select>
            </div>
             

          <div class="col-md-3 input-label">
             Maritial Status   
            </div>
            <div class="col-md-1 input-label">
                <p class="pp">:</p>
            </div>
             <div class="col-md-8">
                <select class="normal-input" id="maritial-status" name="marry">
                    <option>Select Here</option>
                    <option>Married</option>
                    <option>Unmarried</option>
                </select>
            </div>



          <div class="col-md-3 input-label">
             Quota  
            </div>
            <div class="col-md-1 input-label">
                <p class="pp">:</p>
            </div>
             <div class="col-md-8">
                <select class="normal-input" id="quota" name="quota">
                    <option>Select Here</option>
                    <option value="FFQ">FFQ</option>
                    <option value="FFG">FFG</option>
                    <option value="TR">TR</option>
                    <option value="Ansar">Ansar</option>
                    <option value="Non Quota">Non Quota</option>
                </select>
            </div>

            

             <div class="col-md-12">    
                 <div class="present-address address">
                 <div class="col-md-12 form-head">
                     <p>Present Address</p>
                 </div>
                       
                      <div class="col-md-12">
                     <div class="address-label">Care of</div>
                     <div class="address-in"><input type="text" name="prs_care" class="address-input" id="pars-care"></div>
                 </div>

                 <div class="col-md-12">
                     <div class="address-label">Village</div>
                     <div class="address-in"><input type="text" name="prs_vil" class="address-input" id="pars-vil"></div>
                 </div>


                   <div class="col-md-12">
                     <div class="address-label">District</div>
                     <div class="address-in">
                    <select class="address-input" name="prs_dist" id="pars-dist" onchange="myThana(this.value)">
                        <option>Select Here</option>

                          <?php

                          include "connection.php";

                          $sql = "select distinct dist_name from dist_list";

                          $res = mysqli_query($con,$sql);

                    while($rows=mysqli_fetch_assoc($res)){
                    ?> <option> <?php echo $rows['dist_name'];?></option>
                 <?php          }
                           ?> 

                        
                      </select></div>
                   </div>



                     <div class="col-md-12">
                     <div class="address-label">Upozila</div>
                     <div class="address-in">
                         <select class="address-input" name="prs_thana" id="pars-thana">
                             <option>Select District First</option>
                         </select>
                     </div>
                 </div>
                 
                   <div class="col-md-12">
                     <div class="address-label">Post Office</div>
                     <div class="address-in"><input type="text" name="prs_po" class="address-input" id="pars-po"></div>
                 </div>

                 
                </div>




                <div class="parmanent-address address">


                 <div class="col-md-12 form-head">
                     Parmanent Address
                     <input type="checkbox" name="same_add" value="same" onclick="sameAdd()"; id="same-add"> Same as present address
                 </div>

                       
                      <div class="col-md-12">
                     <div class="address-label">Care of</div>
                     <div class="address-in"><input type="text" name="prm_care" class="address-input" id="parm-care"></div>
                 </div>

                 <div class="col-md-12">
                     <div class="address-label">Village</div>
                     <div class="address-in"><input type="text" name="prm_vil" class="address-input" id="parm-vil"></div>
                 </div>


                   <div class="col-md-12">
                     <div class="address-label">District</div>
                     <div class="address-in"><select class="address-input" name="prm_dist" onchange="myPrmThana(this.value)" id="parm-dist">
                         <option>Select Here</option>
                         <?php

                          include "connection.php";

                          $sql = "select distinct dist_name from dist_list";

                          $res = mysqli_query($con,$sql);

                    while($rows=mysqli_fetch_assoc($res)){
                    ?> <option> <?php echo $rows['dist_name'];?></option>
                 <?php          }
                           ?> 




                     </select></div>
                 </div>



                     <div class="col-md-12">
                     <div class="address-label">Upozila</div>
                     <div class="address-in">
                         <select class="address-input" name="prm_thana" id="parm-thana">
                             <option>Select District First</option>
                         </select>
                     </div>
                 </div>
                 
                   <div class="col-md-12">
                     <div class="address-label">Post Office</div>
                     <div class="address-in"><input type="text" name="prm_po" class="address-input" id="parm-po"></div>
                 </div>

                    
                </div>
                
        
              
              </div>


              <!--Address part end-->

              <div class="col-md-3 input-label">
             Mobile Number   
            </div>
            <div class="col-md-1 input-label">
                <p class="pp">:</p>
            </div>
             <div class="col-md-8">
                <input type="text" name="mobile" class="normal-input" id="mobile" onkeyup="numbersOnly()">
            </div>


              <div class="col-md-3 input-label">
             Confirm MObile   
            </div>
            <div class="col-md-1 input-label">
                <p class="pp">:</p>
            </div>
             <div class="col-md-8">
                <input type="text" name="cmobile" class="normal-input" id="cmobile" onkeyup="cnumbersOnly()">
            </div>



             <div class="col-md-3 input-label">
             Email   
             </div>
             <div class="col-md-1 input-label">
                <p class="pp">:</p>
             </div>
              <div class="col-md-8">
                <input type="email" name="email" class="normal-input" onclick="chkMobileNumber()">
              </div>


              <div class="col-md-3 input-label">
             Photo   
             </div>
             <div class="col-md-1 input-label">
                <p class="pp">:</p>
             </div>
              <div class="col-md-8">
                <input type="file" name="photo" class="normal-input">
              </div>

                 
              <div class="col-md-3 input-label">
             Signature   
             </div>
             <div class="col-md-1 input-label">
                <p class="pp">:</p>
             </div>
              <div class="col-md-8">
                <input type="file" name="sign" class="normal-input">
              </div>


               <!-- ssc Education Part start-->
             
               <div class="col-md-12 ssc-main">
                    <div class="edu-head">
                        SSC Education Information
                    </div>





                    <div class="edu-left">

                     
                     <div class="col-md-12">
                     <div class="address-label">Exam</div>
                     <div class="address-in"><select class="address-input" id="ssc-exam" name="ssc_exam">
                         <option>SSC</option>
                         <option>Dhakil</option>
                         <option>O Lavel</option>
                     </select> 
                     </div>
                     </div>

                     <div class="col-md-12">
                     <div class="address-label">Roll No</div>
                     <div class="address-in"><input type="text" name="ssc_roll" class="address-input"></div>
                     </div>

                     <div class="col-md-12">
                     <div class="address-label">Board</div>
                     <div class="address-in"><select class="address-input" id="ssc-board" name="ssc_board">
                         <option>Bharishal</option>
                         <option>Dhaka</option>
                         <option>Rajshahi</option>
                         <option>Shylet</option>
                     </select> 
                     </div>
                     </div>






                        
                    </div>

                  <div class="edu-right">

                     <div class="col-md-12">
                     <div class="address-label">Subject</div>
                     <div class="address-in"><select class="address-input" name="ssc_sub" id="ssc-sub">
                         <option>Science</option>
                         <option>Humanities</option>
                         <option>Science</option>
                         <option>Others</option>
                     </select> 
                     </div>
                     </div>

                    <div class="col-md-12">
                     <div class="address-label">Result</div>
                     <div class="address-in"><select class="address-input" onclick="eduVisable()" name="ssc_res" id="ssc-res">
                         <option value="1">1st class</option>
                         <option value="2">2nd class</option>
                         <option value="3">3rd class</option>
                         <option  value="4" id="ssc-gpa">GPA (Out of 5)</option>
                     </select> 
                     </div>
                     </div>

                    <div class="col-md-12 edu-hidden" id="ssc-gpa-in">
                     <div class="address-label"></div>
                     <div class="address-in">
                        <input type="text" name="ssc_gpa" class="address_input">
                     </div>
                     </div>


                     <div class="col-md-12">
                     <div class="address-label">Passing Year</div>
                     <div class="address-in"><select class="address-input" name="ssc_year">
                         <option>Bharishal</option>
                         <option>Dhaka</option>
                         <option>Rajshahi</option>
                         <option>Shylet</option>
                     </select> 
                     </div>
                     </div>
                        
                    </div>
                   </div>
                
                


                <!--Hsc Education part-->


               <div class="col-md-12 ssc-main">
                    <div class="edu-head">
                        HSC Education Information
                    </div>





                    <div class="edu-left">

                     
                     <div class="col-md-12">
                     <div class="address-label">Exam</div>
                     <div class="address-in"><select class="address-input" name="hsc_exam">
                         <option>SSC</option>
                         <option>Dhakil</option>
                         <option>O Lavel</option>
                     </select> 
                     </div>
                     </div>

                     <div class="col-md-12">
                     <div class="address-label">Roll No</div>
                     <div class="address-in"><input type="text" name="hsc_roll" class="address-input"></div>
                     </div>

                     <div class="col-md-12">
                     <div class="address-label">Board</div>
                     <div class="address-in"><select class="address-input" name="hsc_board">
                         <option>Bharishal</option>
                         <option>Dhaka</option>
                         <option>Rajshahi</option>
                         <option>Shylet</option>
                     </select> 
                     </div>
                     </div>






                        
                    </div>

                  <div class="edu-right">

                     <div class="col-md-12">
                     <div class="address-label">Subject</div>
                     <div class="address-in"><select class="address-input" name="hsc_sub">
                         <option>Science</option>
                         <option>Humanities</option>
                         <option>Science</option>
                         <option>Others</option>
                     </select> 
                     </div>
                     </div>

                    <div class="col-md-12">
                     <div class="address-label">Result</div>
                     <div class="address-in"><select class="address-input" name="hsc_res">
                         <option>Bharishal</option>
                         <option>Dhaka</option>
                         <option>Rajshahi</option>
                         <option>Shylet</option>
                     </select> 
                     </div>
                     </div>

                    <div class="col-md-12 edu-hidden">
                     <div class="address-label"></div>
                     <div class="address-in">
                        <input type="text" name="hsc_gpa" class="address-input">
                     </div>
                     </div>


                     <div class="col-md-12">
                     <div class="address-label">Passing Year</div>
                     <div class="address-in"><select class="address-input" name="hsc_year">
                         <option>2012</option>
                         <option>2013</option>
                         <option>2014</option>
                         <option>2015</option>
                     </select> 
                     </div>
                     </div>
                        
                    </div>
                   </div>    
            
         
                   <div class="col-md-12" id="more">
              
          </div>



                 
        

        <div class="col-md-12 form-footer">

            <input type="checkbox" name="agree">&nbsp &nbsp &nbsp &nbspThe above information is correct and I would like to go to the next step. <br>

            <input type="submit" name="submit" class="submit-btn" value="Submit">


            
        </div>






        </div>
          
      </div>        
  </form>
</div>
       



    <!--Footer Part-->

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
   
        function myThana(data) {

        const ajaxreq = new XMLHttpRequest();
        ajaxreq.open('GET','http://localhost/recruit/getthana.php?selectDist='+data,'TRUE');
        ajaxreq.send();
        ajaxreq.onreadystatechange = function(){
            if(ajaxreq.readyState == 4 && ajaxreq.status == 200){
                document.getElementById("pars-thana").innerHTML=ajaxreq.responseText;
            }
        }
        
    }


function myPrmThana(data) {

        const ajaxreq = new XMLHttpRequest();
        ajaxreq.open('GET','http://localhost/recruit/getthana.php?selectDist='+data,'TRUE');
        ajaxreq.send();
        ajaxreq.onreadystatechange = function(){
            if(ajaxreq.readyState == 4 && ajaxreq.status == 200){
                document.getElementById("parm-thana").innerHTML=ajaxreq.responseText;
            }
        }
        
    }








function sameAdd(){
    const checkBtn=document.getElementById('same-add');
    if (checkBtn.checked === true) {

const prsCare=document.getElementById('pars-care').value.trim();
const prsVil=document.getElementById('pars-vil').value.trim();
const prsDist=document.getElementById('pars-dist').value.trim();
const prsThana=document.getElementById('pars-thana').value.trim();
const prsPo=document.getElementById('pars-po').value.trim();

document.getElementById('parm-care').value = prsCare;

document.getElementById('parm-vil').value = prsVil;
document.getElementById('parm-dist').value = prsDist;

const prmThana = document.getElementById('parm-thana');
newOption = document.createElement("OPTION");
textVal = document.createTextNode(prsThana);
newOption.appendChild(textVal);
prmThana.insertBefore(newOption,prmThana.lastChild);


document.getElementById('parm-thana').value = prsThana;
document.getElementById('parm-po').value = prsPo;

}

else if (checkBtn.checked === false)
{

document.getElementById('parm-care').value ='';
document.getElementById('parm-vil').value ='';
document.getElementById('parm-dist').value ='';
document.getElementById('parm-thana').value ='';
document.getElementById('parm-po').value ='';


}

}



    function calculate_age() {

        var birthdate=document.getElementById('birth-date').value;
        var birth_date = new Date(birthdate);
        var birth_day = birth_date.getDate();
        var birth_month = birth_date.getMonth();
        var birth_year = birth_date.getYear();

        var today_date = new Date("2020-07-15");
        var today_day = today_date.getDate();
        var today_month = today_date.getMonth();
        var today_year = today_date.getYear();
         
         var yourYear=0;
         var yourMonth=0;
         var yourDay=0;
         

//Day calculate
if (today_day >= birth_day) {
    yourDay=today_day- birth_day;
}

else{

    yourDay=today_day-birth_day +31;
}




//month calculate
        if (today_month > birth_month) {
            if (today_day >= birth_day) {
            yourMonth = today_month - birth_month;
        }
         else{
            yourMonth = today_month - birth_month-1;
         }
        }


        else if (today_month == birth_month){
           if(today_day >= birth_day){
               yourMonth = today_month - birth_month;
           }


           else{
              yourMonth = today_month - birth_month -1+12;
           }
            
        }

        else{
            if (today_day >= birth_day){

            yourMonth=today_month-birth_month+12;
        }
        else {
            yourMonth = today_month - birth_month -1+12;
        }

        }





//year calculate
         if (today_month>birth_month){
         yourYear = today_year-birth_year;
         
         }

        else if(today_month==birth_month){
        if(today_day >= birth_day){
            yourYear=today_year-birth_year;
        }
        else{
            yourYear=today_year-birth_year-1;

        }
     }


     else
     {
     yourYear=today_year-birth_year-1;
     }




      if (yourYear<18 || yourYear>30){

      alert("You are not eligible for application submit because of your age");
  }

      //document.getElementById('result').innerHTML='Your Age '+yourYear+'Years'+yourMonth+'Months'+yourDay+'Days';

    }


   function chkMobileNumber(){
        $mobile = document.getElementById("mobile").value.trim();
        $cmobile = document.getElementById("cmobile").value.trim();

        if ($mobile !== $cmobile) {
            alert("mobile number does not match please check your mobile number again.");
        }                 

   }


function numbersOnly(){
    const limit = /[^0-9]/gi;
    const mobile = document.getElementById("mobile");
    const mobileValue = document.getElementById("mobile").value.trim();

    mobile.value = mobile.value.replace(limit,"");

    if (mobileValue.length>11) {
        mobile.value= mobile.value.substring(0,11);
    }
}


function cnumbersOnly(){
    const limit = /[^0-9]/gi;
    const mobile = document.getElementById("cmobile");
    const mobileValue = document.getElementById("cmobile").value.trim();

    mobile.value = mobile.value.replace(limit,"");

    if (mobileValue.length>11) {
        mobile.value= mobile.value.substring(0,11);
    }
}


function eduVisable()
{
    const seleValue = document.getElementById("ssc-res").value.trim();

    if(seleValue=='4'){
        const sscGpa = document.getElementById('ssc-gpa-in');

        sscGpa.className=('edu-gpa');

    }


    else {

        
const sscGpa = document.getElementById('ssc-gpa-in');

        sscGpa.className=('edu-hidden');

    }
}


</script>


</body>
</html>