<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>medical management system</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>


	<?php
		$_SESSION["email"]="";
		$_SESSION["password"]="";

		$_SESSION['userstatus']="";
		      header("location:../signin.php");

	 ?>
 <?php include('footer.php'); ?>


</body>
</html>
