<!DOCTYPE html>
<html>
<head>

	<title>age calculator</title>
    <link rel="stylesheet" type="text/css" href="test.css">
</head>
<body>
<form id="form">

    <div id="input1" class="">
	<label for="First Name">First Name</label>
<input type="text" name="first-name" class="input1" id="first" ><br><br><br>

</div>


<div id="input2" class="last-input input3" >
<label for="Last Name">Last Name</label>
<input type="text" name="last-name" id="last-name" class="last-name2">

</div>
<br>

<button onclick ="">Calculate my Age</button>


<div id="more-info">
    <h2>hello</h2>
    
</div>

<input type="button" name="" value="add more" onclick="moreInfo()">

<input type="button" name="" value="remove" onclick="remInfo()">


</form>



<div class="result" id="result" ></div>
<div id="prag"><h3>dfdfuskndfal;hf;df</h3></div>




<script> 

const prag= document.getElementsByTagName('h3');

const firstName = document.getElementById('first');

var last = document.getElementsByClassName('last-input')[0];


var checkClass = last.classList.contains('border');


if (checkClass==true) {

last.classList.add('hello');

}

else{

    last.classList.add('green');
}






firstName.id='new-input-id';





function moreInfo() {
    const divInfo = document.getElementById('more-info');

    divInfo.innerHTML = '    <div id="input1" class=""><label for="First Name">Father Name</label><input type="text" name="first-name" class="input1" id="first" ><br><br><br></div><div id="input2" class="last-input input3" ><label for="Last Name">Mother Name</label><input type="text" name="last-name" id="last-name" class="last-name2"></div>';
}


function remInfo() {
    const divInfo = document.getElementById('more-info');

    divInfo.innerHTML = '';
}


         
</script>

</body>
</html>
