
<!--THIS CHECKS IF LOGGED IN AS ADMIN ANTIME-->
<?php


if(isset($_SESSION["admpass"]) && isset($_SESSION["admuser"]))
	$flag=1;
else
	echo "<script>alert('Invalid Credentials');window.open('index.php','_self');</script>";

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="sidebar.css">
</head>
<body>
	<div class="sidenav">
  		<a href="user.php">Completed Jobs</a>
  		<a href="addjob.php">Add Jobs</a>
  	</div>
	<div class="main">
		<table border="1">
			<caption>Vehicle Details</caption>
			<tr><th>Number</th><th>Owner Name</th><th>Make</th><th>Model</th><th>Year</th><th>DOS</th></tr>


		</table>
	</div>
</body>
</html>

<?php } ?>