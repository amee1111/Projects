<?php
    session_start();
?>
<html>
<head>
	<title>User Page</title>
	<link rel="stylesheet" href="css.css">
</head style="background-color: #85bec16e">
<body>
	<div>
		<div class="form-box4">
			<img src="profile.jpg" alt="Profile photo" class="img1"><br><br><br><br><br>
			<h4 style="text-align: center;"><?php echo $_SESSION['firstname']." ".$_SESSION['lastname'];?></h4>
			<h4 style="position: absolute; top: 17%; left: 33%; "><?php echo "".$_SESSION['mobilenumber'];?></h4>
			<form>
				<img src="regf.jpg" style="position: absolute; top: 29%; left: 5%; width: 22px; height: 22px; border-radius: 140%;">
				<div class="dropdown1">
  					<button class="dropbtn1">Birth Registration</button>
  					<div class="dropdown-content1">
  					<a href="birthreg.php">New registration</a>
  					<a href="alreadyreg.php">Already registed</a>
  					</div>
				</div>
				<!--<input type="submit" value="Birth Registration form" class="breg">-->
			</form>
			<form>
				<img src="regf.jpg" style="position: absolute; top: 34.8%; left: 5%; width: 22px; height: 22px; border-radius: 140%;">
				<div class="dropdown2">
  					<button class="dropbtn2">Death Registration</button>
  					<div class="dropdown-content2">
  					<a href="deathreg.php">New registration</a>
  					<a href="alreadyreg1.php">Already registed</a>
  					</div>
				</div>
				<!--<input type="submit" value="Death Registration form" class="dreg">-->
			</form>
		</div>
		<div class="form-box5">
			<form action="1.html">
				<input type="submit" value="HOME" class="back1">
			</form>
			
				<img src="profile.jpg" alt="Profile photo" class="img2">
				<div class="dropdown" style="position: absolute; display: inline-block; left: 86%; top: 0px;">
  					<button class="dropbtn" ><?php echo $_SESSION['firstname']." ".$_SESSION['lastname'];?></button>
  					<div class="dropdown-content">
  					<a href="profile.php">Profile</a>
  					<a href="changepass.php">Settings</a>
  					<a href="logout.php">Logout</a>
  					</div>
				</div>
			
		</div>
		<div class="form-box6">
			<h4 class="h5">Welcome to online birth certificate generation <?php echo $_SESSION['firstname']." ".$_SESSION['lastname'];?>!!</h4>
		</div>
	</div>
</body>
</html>