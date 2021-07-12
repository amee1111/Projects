<?php 
	session_start();
	if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $conn = mysqli_connect("localhost","root","","project");
        if ($conn) {

        	$_SESSION['bdate'] =  $_POST['date'];
        	$_SESSION['gender'] = $_POST['gn'];
        	$_SESSION['fullname'] = $_POST['bname'];
        	$_SESSION['fname'] = $_POST['father'];
        	$_SESSION['mname'] = $_POST['mother'];
        	$_SESSION['bplace'] = $_POST['bplace'];
        	$_SESSION['btime'] = $_POST['btime'];
        	$_SESSION['bhospital'] = $_POST['hospital'];


        	$insert = "INSERT INTO birth(bdate, gender, fullname, fname, mname, bplace, btime, bhospital) VALUES('".$_POST['date']."', '".$_POST['gn']."', '".$_POST['bname']."', '".$_POST['father']."', '".$_POST['mother']."', '".$_POST['bplace']."', '".$_POST['btime']."', '".$_POST['hospital']."')";

        	if(mysqli_query($conn,$insert)){
                
                $sel = "SELECT reg_id FROM birth WHERE fullname='".$_POST['bname']."'";
            
	            $result = mysqli_query($conn,$sel);
	            
	            $row = mysqli_fetch_assoc($result);
	           
	            $_SESSION['reg1'] = $row['reg_id'];

                echo "<script>alert('Registration successfull!!');window.location.href='certificate.php'</script>";

            }
            else{
            	echo "<script>alert('Registration error!!');window.location.href='birthreg.php'</script>";
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
			<form action="birthreg.php">
				<img src="regf.jpg" style="position: absolute; top: 29%; left: 5%; width: 22px; height: 22px; border-radius: 140%;">
				<div class="dropdown1" >
  					<button class="dropbtn1">Birth Registration</button>
  					<div class="dropdown-content1">
  					<a href="birthreg.php">New registration</a>
  					<a href="alreadyreg.php">Already registed</a>
  					</div>
				</div>
				<!--<input type="submit" value="Birth Registration form" class="breg">-->
			</form>
			<form action="deathreg.php">
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
				<label class="l13">Date of birth:</label><br>
        		<input type="date" name="date" class="date" required>
        		<label class="l14">Gender:</label>
        		<input type="radio" name="gn" value="Male" class="male"><lable class="l15">Male</lable>
        		<input type="radio" name="gn" value="Female" class="female"><lable class="l16">Female</lable>
        		<label class="l17">Full Name:</label>
        		<input type="text" name="bname" class="bname">
        		<label class="l18">Name of Father:</label>
        		<input type="text" name="father" class="father">
        		<label class="l19">Name of Mother:</label>
        		<input type="text" name="mother" class="mother">
        		<label class="l20">Place of birth:</label>
        		<input type="text" name="bplace" class="bplace">
        		<label class="l21">Time of birth:</label>
        		<input type="text" name="btime" class="btime">
        		<label class="l22">Name of hospital:</label>
        		<input type="text" name="hospital" class="hospital">
        		<input type="submit" name="Certificate" value="Get Certificate" class="b6" >
        	</form>
		</div>
		
	</div>
</body>
</html>