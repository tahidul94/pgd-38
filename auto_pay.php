<!DOCTYPE html>
<html>
<head>
	<title>payment</title>
	<script src="jquery.js"></script>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

</head>
<body>

<div id="auto-pay"> </div>

<script type="text/javascript">
	$(document).ready(function() {
		setInterval(function(){
			$("#auto-pay").load("pay_status.php");
			refresh();
		},2000);
	});
</script>

</body>
</html>