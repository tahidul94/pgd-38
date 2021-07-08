

<html>
<head>
    <meta charset="UTF-8">
    <title>Time</title>
</head>
<body>

<div id="time">
</div>
<form action="" method="POST">
<input type="text" name="time" id="inp">
<input type="submit" name="submit">
</form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
        setInterval(function(){
            $.ajax({url: "time.php", success: function(response){
                $('#time').html(response)
                $('#inp').val(response)
            }});
        }, 1000);
</script>
</body>
</html>

<?php
include "connection.php";

if (isset($_POST['submit'])) {
	$time = $_POST['time'];
	$loca = 'dhaka';

$query ="insert into time (time,location) values('$time','$loca')";

//INSERT INTO `time`(`time`, `location`) VALUES ($time,'$loca',[value-3])

$res = mysqli_query($con,$query);
 if ($res) {
 	echo " sumbmitted";
 }
 else{
 	echo"no query";
 }

}

else {
	echo "no submit";
}
?>



