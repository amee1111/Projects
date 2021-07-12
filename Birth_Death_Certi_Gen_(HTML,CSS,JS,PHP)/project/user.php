<?php
    session_start();
    
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $conn = mysqli_connect("localhost","root","","project");
        if ($conn) {
            $_SESSION['mobilenumber'] =  $_POST['number'];
            $sel = "SELECT password FROM register WHERE mobile='".$_POST['number']."'";
            $sel1 = "SELECT fname FROM register WHERE mobile='".$_POST['number']."'";
            $sel2 = "SELECT lname FROM register WHERE mobile='".$_POST['number']."'";
            $result = mysqli_query($conn,$sel);
            $result1 = mysqli_query($conn,$sel1);
            $result2 = mysqli_query($conn,$sel2);
            $row1 = mysqli_fetch_assoc($result1);
            $row2 = mysqli_fetch_assoc($result2);
            $_SESSION['firstname'] = $row1['fname'];
            $_SESSION['lastname']= $row2['lname'];
            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                if($_POST['pw']==$row['password']){
                    echo "<script>alert('Login successfull!!'); window.location.href='login.php'</script>";
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
	<title>user</title>
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
    <div class = "form-box" style="border-radius: 25px;">
    	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" onsubmit="return validate()" method="post">
        	<h3 class="h1">User Login Form</h3>
        	<label class="l1">Mobile Number: </label><br>
        	<input type="tel" name="number" class="mobile"  placeholder="123-123-1234" id="mn">
            <span id="mb" style="position: absolute; top: 47px; left: 67px; color: red"></span>
        	<label class="l2">Password:</label><br>
        	<input type="password" name="pw" class="pwd" id="pwd" placeholder="Minimum 8 characters">
        	<a href="forgot.php" class="link1">Forgot password?</a>
        	<input type="submit" value="Login" class="b2">
        	<a href="register.php" class="link2">Don't have an aacount? Sign Up</a>
        	<a href="1.html" class="link3">Back To Home!!</a>
    	</form>
        <script type="text/javascript">
            function validate(){
                var mobile = document.getElementById('mn').value;
                var pwd = document.getElementById('pwd').value;
                if(mobile==""){
                    document.getElementById('mb').innerHTML="Mobile number feild is required!!!!";
                    return false;
                }
                if(isNaN(mobile)){
                    document.getElementById('mb').innerHTML="Olny numbers are allowed in number!!";
                    return false;
                }
                if(mobile.length != 10){
                    document.getElementById('mb').innerHTML="Mobile number only have 10 digites!!";
                    return false;
                }
                

                if(pwd==""){
                    document.getElementById('mb').innerHTML="Password feild can not be NULL!!!!";
                    return false;
                }
                if(pwd.length <= 7){
                    document.getElementById('mb').innerHTML="password should be grater than 8 no!!";
                    return false;
                }
                
            }
        </script>
    </div>        
</body>
</html>