<?php
    session_start();
    
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $conn = mysqli_connect("localhost","root","","project");
        if ($conn) {
            
            $sel = "SELECT password FROM adminregister WHERE mobile='".$_SESSION['mn']."'";
            
            $result = mysqli_query($conn,$sel);
            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                if($_POST['pwd']==$row['password']){
                	if($_POST['npwd']==$_POST['cpwd']){
                		$update = "UPDATE adminregister SET password='".$_POST['npwd']."' WHERE mobile='".$_SESSION['mn']."'";

                		if (mysqli_query($conn, $update)) {
			  				echo "<script>alert('Updated successfull!!'); window.location.href='admin.php'</script>";
			  			}
			  			else{
			  				echo "<script>alert('Error!!!');</script>";
			  			}
                	}
                	else {
                		echo "<script>alert('Password do not match!');</script>";
                	}
                    
                }else{
                    echo "<script>alert(' Current Password is incorrect!!');</script>";
                }
            }else{
                echo "<script>alert('User not found!!');</script>";
            }
        }else{
            echo "<script>alert('DB Connection Error');</script>";
        }

    }
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
			<h4 style="position: absolute; top: 17%; left: 33%; "><?php echo "".$_SESSION['mn'];?></h4>
			
		</div>
		<div class="form-box5">
			<form action="1.html">
				<input type="submit" value="HOME" class="back1">
			</form>
			
				<img src="profile.jpg" alt="Profile photo" class="img2">
				<div class="dropdown">
  					<button class="dropbtn"><?php echo $_SESSION['faname']." ".$_SESSION['laname'];?></button>
  					<div class="dropdown-content">
  					<a href="profile.php">Profile</a>
  					<a href="changepass.php">Settings</a>
  					<a href="1.html">Logout</a>
  					</div>
				</div>
		</div>
		<div class="form-box10">
			<img src="https://cdn.wallpapersafari.com/72/88/kHvVZD.jpg" class="imgb">
			
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
				<h3 class="h6">Change Password</h3>
				<label class="l50">Current Password: </label><br>
        		<input type="password" name="pwd" class="cp" required>
        		<label class="l51">New Password: </label><br>
        		<input type="password" name="npwd" class="np" required>
				<label class="l52">Confirm Password: </label><br>
        		<input type="password" name="cpwd" class="cop" required>
        		<input type="submit" value="Change Password" class="b5">
        	</form>
		</div>
		
	</div>
</body>
</html>