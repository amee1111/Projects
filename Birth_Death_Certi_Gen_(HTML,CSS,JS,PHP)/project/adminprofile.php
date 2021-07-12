<?php
	session_start();
    
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $conn = mysqli_connect("localhost","root","","project");
        if ($conn) {
        	$upd = "UPDATE adminregister SET fname='".$_POST['fn']."', lname='".$_POST['ln']."', mobile='".$_POST['mobile']."', address='".$_POST['add']."' WHERE mobile='".$_SESSION['mn']."'";
        	if (mysqli_query($conn, $upd)) {
  				echo "<script>alert('Updated successfull!!'); window.location.href='admin.php'</script>";
  			}
  			else{
  				echo "<script>alert('Error!!');</script>";
  			}
        }
        else{
        	echo "<script>alert('DB Connection Error');</script>";
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>User Page</title>
	<link rel="stylesheet" type="text/css" href="css.css">
	<link rel="stylesheet" href="css.css">
	<style type="text/css">
		.im{
                opacity:0.3;
                width: 100%;
                position: fixed;
                left: 0px;
                top: 0px;       
        }	
        .b15{
			width: 30%;
			padding: 8px 33px;
			cursor: pointer;
			display: block;
			margin: auto;
			background: #bbb2b2;
			border: 0;
			outline: none;
			border-radius: 5px;
			position: absolute;
			top: 290px;
			left: 222px;
			font-size: 14px;
		}

	</style>
	
</head>
<body style="background-color: #f9f3f3">
	<div>
		<div class="form-box4">
			<img src="profile.jpg" alt="Profile photo" class="img1"><br><br><br><br><br>
			<h4 style="text-align: center;"><?php echo $_SESSION['faname']." ".$_SESSION['laname'];?></h4>
			<h4 style="position: absolute; top: 17%; left: 33%; "><?php echo $_SESSION['mn']?></h4>
			
		</div>
		<div class="form-box5">
			<form action="1.html">
				<input type="submit" value="HOME" class="back1">
			</form>
			<form action="profile.html">
				<img src="profile.jpg" alt="Profile photo" class="img2">
				<div class="dropdown">
  					<button class="dropbtn"><?php echo $_SESSION['faname']." ".$_SESSION['laname'];?></button>
  					<div class="dropdown-content">
  					<a href="profile.php">Profile</a>
  					<a href="setting.php">Settings</a>
  					<a href="1.html">Logout</a>
  					</div>
				</div>
			</form>
		</div>
		<div class="form-box7">
			<img src="https://cdn.wallpapersafari.com/72/88/kHvVZD.jpg" class="imgb">
			
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

				<h3 class="h6">Profile</h3>
				<label class="l8">First Name: </label><br>
        		<input type="text" name="fn" class="nm" required>
        		<label class="l9">Last Name: </label><br>
        		<input type="text" name="ln" class="lnm" required>
        		<label class="l10">Mobile Number:</label><br>
        		<input type="tel" name="mobile" class="mb" required>
    	    	<label class="l11">Address:</label><br>
	        	<input type="text" name="add" class="add1" required placeholder="">
        		
        		<input type="submit" name="change" value="Change" class="b15">
        	</form>
		</div>
	</div>
</body>
</html>