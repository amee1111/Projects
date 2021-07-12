<?php
	session_start();    

?>
<!DOCTYPE html>
<html>
<head>
	<title>User Page</title>
	<link rel="stylesheet" href="css.css">
	<style type="text/css">
		th, td {
		  padding: 8px;
		  text-align: center;
		  border-bottom: 1px solid #ddd;
		}

		tr:hover {background-color:#f5f5f5;}

		button:hover{
			color: blue;
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
  					<a href="1.html">Logout</a>
  					</div>
				</div>
			
		</div>
		
<?php
	
	if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $conn = mysqli_connect("localhost","root","","project");
        $sel = "SELECT * FROM death";
        $result = mysqli_query($conn,$sel);
        if (mysqli_num_rows($result) > 0) {
?>
    <div style="position:absolute;width: 82%; left:16%; top:40px; border:0px solid black;">
    	<h3><u>Death Certificate Details:</u>
    		<button style="float: right; background-color: transparent; border: 0px;" onclick="window.location.href='Adminlogin.php'">Back</button>
    	</h3>
    <table  style="border-collapse: collapse; width: 100%;">
    	<tr>
			        <th>Registration id</th>
			        <th>Name</th>
			        <th>Gender</th>
			        <th>Father's Name</th>
			        <th>Mother's Name</th>
			        <th>Birth Date</th>
			        <th>Birth Place</th>
			        <th>Birth Time</th>
			        <th>Hospital</th>
            	</tr>

<?php 
        	
           	while($row = mysqli_fetch_assoc($result)){
  ?>              	
            	<tr>
			        <td><?php echo $row['reg_id']?></td>
			        <td><?php echo $row['dfullname']?></td>
			        <td><?php echo $row['dgn']?></td>
			        <td><?php echo $row['dfather']?></td>
			        <td><?php echo $row['dmother']?></td>
			        <td><?php echo $row['ddate']?></td>
			        <td><?php echo $row['dplace']?></td>
			        <td><?php echo $row['dtime']?></td>
			        <td><?php echo $row['dhospital']?></td>
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