<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $conn = mysqli_connect("localhost","root","","project");
        if ($conn) {
            $ins = "INSERT INTO adminregister(fname, lname, mobile, address, password) VALUES('".$_POST['fn']."', '".$_POST['ln']."', '".$_POST['mobile']."', '".$_POST['add']."', '".$_POST['pw']."')";
            if(mysqli_query($conn,$ins)){
                echo "<script>alert('Registration successfull!!');window.location.href='admin.php'</script>";
            }
            else {
                echo "<script>alert('Registration error!!');window.location.href='adminregister.php'</script>";   
            }
        }else{
            echo "<script>alert('DB Connection Error');window.location.href='admin.php'</script>";
        }

    }
?>

<html>
<head>
	<title>Login form</title>
	<link rel="stylesheet" href="css.css">
        <style type="text/css">
        img{
            opacity:0.3;
            width: 100%;
            position: fixed;
            left: 0px;
            top: 0px;       
        }
    </style>
</head>
<body>
        <img src="https://cdn.wallpapersafari.com/72/88/kHvVZD.jpg">
	<div class="form-box2" style="border-radius: 25px;">
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
			<h3 class="h1">Admin Registration Form</h3><br><br>
			<label class="l3">First Name: </label><br>
            <input type="text" name="fn" class="f3" id="f3" placeholder="" required>
            <label class="l4">Last Name:</label><br>
            <input type="text" name="ln" class="f4" id="f4" placeholder="" required>
            <label class="l5">Mobile Number:</label><br>
            <input type="tel" name="mobile" class="f5" id="f5" placeholder="123-123-1234" required>
            <label class="l6">Address:</label><br>
            <input type="text" name="add" class="f6" id="f6" placeholder="" required>
            <label class="l7">Password:</label><br>
            <input type="password" name="pw" class="f7" id="f7" placeholder="Minimum 8 characters" required>
            <a href="user.html" class="link4">Do you have an account? SIGN IN</a>
            <input type="submit" value="Register" class="b3">
		</form>
                
	</div>
</body>
</html>