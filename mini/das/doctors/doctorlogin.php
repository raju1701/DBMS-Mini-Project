<?php session_start();  ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>DAS-Doctor Login</title>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../style.css">
	<style>
		.error {color: #FF0000;}
	</style>
</head>
<body>



<div class="container-fluid">
		<div class="header_top">
			
			
		</div>

	<!-- 	this is for menu -->
	<div class="navbar navbar-default nav">
		<nav class="menu">
			<ul>
				<li><a href="../index.php">Home</a></li>
				
				<li><a href="logout.php">Logout</a></li>
			</ul>
		</nav>
	</div>
	






	<!-- this is for donor registraton -->
	<div class="login" style="background-color:#fff;">
		<h1 class="text-center" style="background-color:#272327;color: #fff;">Doctor Panel</h1>
			<div class="formstyle" style="padding: 10px;border: 1px solid lightgrey;margin-right: 376px;margin-left: 406px; margin-bottom: 25px;background-color:#f3f3f8;color:#141313;">
				<form action="" method="post" class="text-center">
					<label>
						<input type="text" name="userid"  placeholder="userid" required>
					</label><br><br>
					<label>
						<input type="password" name="password"  placeholder="password">
					</label><br><br>
					<button name="submit" type="submit" style="margin-left:127px;padding: 5px 25px; border-radius: 4px;">Login</button> <br>

					


					<!-- login validation -->
			<?php 
							$_SESSION['adminstatus']="";
							
							include('../config.php');
							if(isset($_POST["submit"])){

							$sql= "SELECT * FROM doctor WHERE userid= '" . $_POST["userid"]."' AND password= '" . $_POST["password"]."'";

							$result = $conn->query($sql);

									if ($result->num_rows > 0) {
											$_SESSION["userid"]= $_POST["userid"];
											// $_SESSION["type"]=$result[2];
											$_SESSION['adminstatus']= "yes";
										    echo "<script>location.replace('myDetails.php');</script>";
												// echo "u are supposed to redirect to ur profile";
										} else {
										    echo "<span style='color:red;'>Invalid username or password</span>";
										}
						$conn->close();		
					}
					
 			?>
		<!-- login validation End-->


				</form> <br>&nbsp;&nbsp;&nbsp;
				
				<br>

				
		
				
			
		
	</div>
	
	
</div>
	
<?php include('../footer.php'); ?>

	
</div><!--  containerFluid Ends -->




<script src="../js/bootstrap.min.js"></script>


 
			



	
</body>
</html>

