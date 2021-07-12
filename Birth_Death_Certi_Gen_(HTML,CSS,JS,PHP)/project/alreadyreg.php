<?php
	session_start();
	if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $conn = mysqli_connect("localhost","root","","project");
        if ($conn) {
        	$_SESSION['regid']=$_POST['regid'];
        	$sel = "SELECT bdate, gender, fullname, fname, mname, bplace, btime, bhospital FROM birth WHERE reg_id ='".$_POST['regid']."'";
        	$result = mysqli_query($conn, $sel);
        	if (mysqli_num_rows($result) > 0) {
			  while($row = mysqli_fetch_assoc($result)) {
				    $_SESSION['date'] =  $row['bdate'];
		        	$_SESSION['gn'] = $row['gender'];
		        	$_SESSION['bname'] = $row['fullname'];
		        	$_SESSION['father'] = $row['fname'];
		        	$_SESSION['mother'] = $row['mname'];
		        	$_SESSION['bplace'] = $row['bplace'];
		        	$_SESSION['btime'] = $row['btime'];
		        	$_SESSION['hospital'] = $row['bhospital'];  
		        	echo "<script>alert('Its there!!'); window.location.href='certificate1.php'</script>";
			  }
			}
			else{
				echo "<script>alert('No data!!');</script>";
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
			<h4 style="position: absolute; top: 17%; left: 33%; "><?php echo $_SESSION['mobilenumber'];?></h4>
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
				<div class="dropdown2" >
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
		<div class="form-box9">
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"> 
			<img src="https://cdn.wallpapersafari.com/72/88/kHvVZD.jpg" class="imgb">
			<h3 class="h6">Already Registered</h3>
				<label class="l23">Enter Birth Certificate ID: </label><br>
        		<input type="text" name="regid" class="regid" required>
				<input type="submit" name="Certificate" value="Get Certificate" class="b7">
			</form>
		</div>
	</div>
</body>
</html>