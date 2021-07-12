<?php 
    session_start();
    
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $conn = mysqli_connect("localhost","root","","project");
        if ($conn) {
            
            $sel = "SELECT password FROM adminregister WHERE mobile='".$_POST['num']."'";
            
            $result = mysqli_query($conn,$sel);
            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                
                    if($_POST['pw1']==$_POST['pw2']){
                        $update = "UPDATE adminregister SET password='".$_POST['pw2']."' WHERE mobile='".$_POST['num']."'";

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
    <title>Forgot Password</title>
    <link rel="stylesheet" href="css.css">
    <link rel="stylesheet" type="text/css" href="css.css">
    <style type="text/css">
        img{
            opacity:0.3;
            width: 100%;
            position: fixed;
            left: 0px;
            top: 0px;       
        }

        .form-box1{
            width: 350px;
            height: 255px;
            position: relative;
            margin: 3% auto;
            background: #f9f3f3;
            padding: 5px;
            border: 2.5px solid #000;
            position: absolute;
            left: 36%;
            top: 26%;
        }

        .num{
            width: 49%;
            padding: 7px 0;
            margin: 10px 0;
            display: flex;
            justify-content: center;
            align-items: right;
            border-top: 0;
            border-bottom: 2px solid #999;
            border-left: 00;
            border-right: 0;
            outline: none;
            background: transparent;
            left: 162px;
            position: absolute;
            top: 56px;
        }

        .f1{
            width: 49%;
            padding: 7px 0;
            margin: 10px 0;
            display: flex;
            justify-content: center;
            align-items: right;
            border-top: 0;
            border-bottom: 2px solid #999;
            border-left: 00;
            border-right: 0;
            outline: none;
            background: transparent;
            left: 162px;
            position: absolute;
            top: 101px;
        }

        .f2{
            width: 49%;
            padding: 7px 0;
            margin: 10px 0;
            display: flex;
            justify-content: center;
            align-items: right;
            border-top: 0;
            border-bottom: 2px solid #999;
            border-left: 00;
            border-right: 0;
            outline: none;
            background: transparent;
            left: 162px;
            position: absolute;
            top: 146px;
        }

        .b1{
            width: 30%;
            padding: 8px 33px;
            cursor: pointer;
            display: block;
            margin: auto;
            background: #e8dede;
            border: 0;
            outline: none;
            border-radius: 5px;
            position: absolute;
            top: 78%;
            left: 44%;
            font-size: 14px;
        }

    </style>
</head>
<body>
    <img src="https://cdn.wallpapersafari.com/72/88/kHvVZD.jpg">
    <div class = "form-box1" style="border-radius: 25px;">
        <h3 class="h1">Reset Password</h3>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" onsubmit="return validate()" method="post">
            <label style="left: 14px;position: absolute;top:72px;">Enter Mobile number: </label></span><br>
            <input type="text" name="num" class="num" id="num" placeholder="123-123-1230">
            <label style="left: 14px;position: absolute;top:118px;">Enter new password: </label></span><br>
            <input type="password" name="pw1" class="f1" id="pwd" placeholder="Minimum 8 characters">
            <label style="left: 14px;position: absolute;top:164px;">Re-enter Password:</label><br>
            <input type="password" name="pw2" class="f2" id="cpwd" placeholder="Conform password">
            <input type="submit" name="update" value="Update" class="b1" >
            <span id="pw"></span>
        </form>
        <script type="text/javascript">
            function validate(){
                var pwd = document.getElementById('pwd').value;
                var cpwd = document.getElementById('cpwd').value;
                
                if (pwd==""){
                    document.getElementById('pw').innerHTML="Password feild can not be NULL!!";
                    return false;
                }
                if(cpwd==""){
                    document.getElementById('pw').innerHTML="Re-enter password feild can't be null!!";
                    return false;
                }
                if(pwd!=cpwd){
                    document.getElementById('pw').innerHTML="Password do not match each other!!";
                    return false;
                }
            }
        </script>
    </div>  

</body>
</html>