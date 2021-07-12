<?php
	session_start();    

?>
<!DOCTYPE html>
<html>
<head>
	<title>User Page</title>
	<link rel="stylesheet" href="css.css">
</head style="background-color: #85bec16e">
<body>
	<div>
		<div class="form-box4">
			<img src="profile.jpg" alt="Profile photo" class="img1"><br><br><br><br><br>
			<h4 style="text-align: center;"><?php echo $_SESSION['faname']." ".$_SESSION['laname'];?></h4>
			<h4 style="position: absolute; top: 17%; left: 33%; "><?php echo $_SESSION['mn']?></h4>
			<form>
				
			</form>
		</div>
		<div class="form-box5">
			<form action="1.html">
				<input type="submit" value="HOME" class="back1">
			</form>
			
				<img src="profile.jpg" alt="Profile photo" class="img2">
				<div class="dropdown">
  					<button class="dropbtn"><?php echo $_SESSION['faname']." ".$_SESSION['laname'];?></button>
  					<div class="dropdown-content">
  					<a href="adminprofile.php">Profile</a>
  					<a href="setting.php">Settings</a>
  					<a href="logout.php">Logout</a>
  					</div>
				</div>
			
		</div>
		
		<div class="box1">
			<div class="box11">
				<h3><center>User Details</center></h3>	
				
				<form action="viewusers.php" method="post">
					<input type="submit" name="view" value="View users" class="btnadd">
				</form>
				<form action="deleteuser.php" method="post">
					<input type="submit" name="delete" value="Delete User" class="btndelete">
				</form>
			</div>

		</div>
		<div class="box2">
			<div class="box21">
				<h3><center>Certificate Details</center></h3>	
				
				<form action="birthcertificatedetails.php" method="post">
					<input type="submit" name="birthd" value="Generated Birth Certificate Details" class="birthd">
				</form>
				<form action="deathcertificatedetails.php" method="post">
					<input type="submit" name="deathd" value="Generated Death Certificate Details" class="deathd">
				</form>
			</div>

		</div>
		
		
	</div>
</body>
</html>