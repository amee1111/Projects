<?php
	session_start();

    $conn = mysqli_connect("localhost","root","","project");	
    $del = "DELETE FROM register WHERE id = '".$_GET['sid']."'";
    if (mysqli_query($conn, $del)) {
	  echo  "<script>alert('Deleted successfully!!');window.location.href='Adminlogin.php'</script>";
	} else {
	  echo "<script>alert('Error!!');</script>";
	}
?>