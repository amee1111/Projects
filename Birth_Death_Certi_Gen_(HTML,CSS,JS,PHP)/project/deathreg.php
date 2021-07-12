<?php 
	session_start();
	if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $conn = mysqli_connect("localhost","root","","project");
        if ($conn) {
          echo(phpinfo());
        	$_SESSION['ddate'] =  $_POST['ddate'];
        	$_SESSION['dgender'] = $_POST['gn1'];
        	$_SESSION['dfullname'] = $_POST['dname'];
        	$_SESSION['dfname'] = $_POST['fathern'];
        	$_SESSION['dmname'] = $_POST['mothern'];
        	$_SESSION['dplace'] = $_POST['dplace'];
        	$_SESSION['dtime'] = $_POST['dtime'];
        	$_SESSION['dhospital'] = $_POST['dhospital'];


        	$insert = "INSERT INTO death(ddate, dgn, dfullname, dfather, dmother, dplace, dtime, dhospital) VALUES('".$_POST['ddate']."', '".$_POST['gn1']."', '".$_POST['dname']."', '".$_POST['fathern']."', '".$_POST['mothern']."', '".$_POST['dplace']."', '".$_POST['dtime']."', '".$_POST['dhospital']."')";
        	
        	
        	if(mysqli_query($conn,$insert)){

        		$sel = "SELECT reg_id FROM death WHERE dfullname='".$_POST['dname']."'";
            
	            $result = mysqli_query($conn,$sel);
	            
	            $row = mysqli_fetch_assoc($result);
	           
	            $_SESSION['reg'] = $row['reg_id'];
                echo "<script>alert('Registration successfull!!');window.location.href='deathcertificate.php'</script>";

            }
            else{
            	echo "<script>alert('Registration error!!');window.location.href='deathreg.php'</script>";
            }
        }
        else{
        	echo "<script>alert('DB Connection Error');</script>";
        }
    } 

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
  					<button class="dropbtn"><?php echo $_SESSION['firstname']." ".$_SESSION['lastname'];?></button>
  					<div class="dropdown-content">
  					<a href="profile.php">Profile</a>
  					<a href="changepass.php">Settings</a>
  					<a href="logout.php">Logout</a>
  					</div>
				</div>
		</div>
		<div class="form-box8">
			<img src="https://cdn.wallpapersafari.com/72/88/kHvVZD.jpg" class="imgb">
			
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
				<h3 class="h6">Registration Form</h3>
				<label class="l13">Date of death:</label><br>
        		<input type="date" name="ddate" class="ddate" required>
        		<label class="l14">Gender:</label>
        		<input type="radio" name="gn1" value="Male" class="male"><lable class="l15">Male</lable>
        		<input type="radio" name="gn1" value="Female" class="female"><lable class="l16">Female</lable>
        		<label class="l17">Full Name:</label>
        		<input type="text" name="dname" class="dname">
        		<label class="l18">Name of Father:</label>
        		<input type="text" name="fathern" class="fathern">
        		<label class="l19">Name of Mother:</label>
        		<input type="text" name="mothern" class="mothern">
        		<label class="l20">Place of death:</label>
        		<input type="text" name="dplace" class="dplace">
        		<label class="l21">Time of death:</label>
        		<input type="text" name="dtime" class="dtime">
        		<label class="l22">Name of hospital:</label>
        		<input type="text" name="dhospital" class="dhospital">
        		<input type="submit" name="Certificate" value="Get Certificate" class="b6" >
        	</form>
		</div>
		
	</div>
</body>
</html>