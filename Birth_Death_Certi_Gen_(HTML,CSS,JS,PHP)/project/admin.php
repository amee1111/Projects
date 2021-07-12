<?php
    session_start();
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $conn = mysqli_connect("localhost","root","","project");
        if ($conn) {
            $_SESSION['mn'] = $_POST['number'];
            $sel = "SELECT password FROM adminregister WHERE mobile='".$_POST['number']."'";
            $sel1 = "SELECT fname FROM adminregister WHERE mobile='".$_POST['number']."'";
            $result1 = mysqli_query($conn,$sel1);
            $row1 = mysqli_fetch_assoc($result1);
            $_SESSION['faname'] = $row1['fname'];

            $sel2 = "SELECT lname FROM adminregister WHERE mobile='".$_POST['number']."'";
            $result2 = mysqli_query($conn,$sel2);
            $row2 = mysqli_fetch_assoc($result2);
            $_SESSION['laname'] = $row2['lname'];
            
            $result = mysqli_query($conn,$sel);
            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                if($_POST['pw']==$row['password']){
                    echo "<script>alert('Login successfull!!'); window.location.href='Adminlogin.php'</script>";
                }else{
                    echo "<script>alert('Password is incorrect!!');</script>";
                }
            }else{
                echo "<script>alert('User not found!!');</script>";
            }
        }else{
            echo "<script>alert('DB Connection Error');</script>";
        }

    }
?>

<html>
<head>
	<title>Admin login</title>
	<link rel="stylesheet" href="css.css">
    <style type="text/css">
        img{
                opacity:0.3;
                width: 100%;
                position: fixed;
                left: 0px;
                top: 0px;       
            }
        .b10{
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
            top: 67.5%;
            left: 34%;
            font-size: 14px;
        }

        .link7{
            position: absolute;
            left: 121px;
            top: 84%;
            text-decoration-line: none;
        }

    </style>
</head>
<body>
    <img src="https://cdn.wallpapersafari.com/72/88/kHvVZD.jpg">
	<div class = "form-box3" style="border-radius: 25px;">
    	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        	<h3 class="h1">Admin Login</h3>
        	<label class="l1">Mobile Number: </label><br>
        	<input type="tel" name="number" class="mobile"  placeholder="123-123-1234" required>
        	<label class="l2">Password:</label><br>
        	<input type="password" name="pw" class="pwd" required placeholder="Minimum 8 characters">
        	<a href="adminchangepass.php" class="link1">Forgot password?</a>
        	<input type="submit" value="Login" class="b10">
            
        	<a href="1.html" class="link7">Back To Home!!</a>
    	</form>
</body>
</html>