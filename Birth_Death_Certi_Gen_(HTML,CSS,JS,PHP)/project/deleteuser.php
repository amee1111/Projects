<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>User Page</title>
	<link rel="stylesheet" href="css.css">
	<style type="text/css">
		.box3{
			height: 200px;
			width: 82%;
			border: 0px solid black;
			position: absolute;
			left: 16%;
			top: 300px;
			
		}
		th, td {
		  padding: 8px;
		  text-align: center;
		  border-bottom: 1px solid #ddd;
		}

		tr:hover {
			background-color:#f5f5f5;
		}

		button:hover{
			background-color:#BBB2B2;
			border-bottom: 1px solid black;			
		}

	</style>
</head style="background-color: #85bec16e">
<body>
	<div>
		<div class="form-box4">
			<img src="profile.jpg" alt="Profile photo" class="img1"><br><br><br><br><br>
			<h4 style="text-align: center;"><?php echo $_SESSION['faname']." ".$_SESSION['laname'];?></h4>
			<h4 style="position: absolute; top: 17%; left: 33%; "><?php echo $_SESSION['mn']?></h4>
			<form>
				
			</form>
		</div>
		<div class="form-box5">
			<form action="1.html">
				<input type="submit" value="HOME" class="back1">
			</form>
			
				<img src="profile.jpg" alt="Profile photo" class="img2">
				<div class="dropdown">
  					<button class="dropbtn"><?php echo $_SESSION['faname']." ".$_SESSION['laname'];?></button>
  					<div class="dropdown-content">
  					<a href="adminprofile.php">Profile</a>
  					<a href="setting.php">Settings</a>
  					<a href="logout.php">Logout</a>
  					</div>
				</div>
			
		</div>
		
		<div class="box1">
			<div class="box11">
				<h3><center>User Details</center></h3>	
				
				<form action="viewusers.php" method="post">
					<input type="submit" name="view" value="View users" class="btnadd">
				</form>
				<form action="deleteuser.php" method="post">
					<input type="submit" name="delete" value="Delete User" class="btndelete">
				</form>
			</div>

		</div>
		<div class="box2">
			<div class="box21">
				<h3><center>User Details</center></h3>	
				
				<form action="birthcertificatedetails.php" method="post">
					<input type="submit" name="birthd" value="Generated Birth Certificate Details" class="birthd">
				</form>
				<form action="deathcertificatedetails.php" method="post">
					<input type="submit" name="deathd" value="Generated Death Certificate Details" class="deathd">
				</form>
			</div>

		</div>
<?php
	
	if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $conn = mysqli_connect("localhost","root","","project");
        $sel = "SELECT * FROM register";
        $result = mysqli_query($conn,$sel);
        if (mysqli_num_rows($result) > 0) {
?>
    <div style="position:absolute;width: 82%; left:16%; top:300px; border:0px solid black;">
    	<h3><u>Users</u></h3>
    <table  style="border-collapse: collapse; width: 100%;">
    	<tr>
			        <th>User id</th>
			        <th>First Name</th>
			        <th>Last Name</th>
			        <th>Mobile Number</th>
			        <th>Address</th>
			        <th>Password</th>
			        <th>Delete User</th>
            	</tr>

<?php 
        	
           	while($row = mysqli_fetch_assoc($result)){
           		$_SESSION['did']=$row['id'];
  ?>              	
            	<tr>
			        <td><?php echo $row['id']?></td>
			        <td><?php echo $row['fname']?></td>
			        <td><?php echo $row['lname']?></td>
			        <td><?php echo $row['mobile']?></td>
			        <td><?php echo $row['address']?></td>
			        <td><?php echo $row['password']?></td>
			        <td><?php echo '<a style="color: black ; text-decoration:none" href="delete.php?sid='.$row['id'].'">'?> Delete</td>

			       
            	</tr>
            	<?php          
            }
        }else{
                echo "<script>alert('User not found!!');</script>";
            }
        }

    
?>
		
		</table>
	</div>
	</div>
</body>
</html>