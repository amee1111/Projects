<?php
	session_start();
	
?>
<html>
<head>
	<title>Certificate</title>
	<link rel="stylesheet" href="css.css">
	<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>  
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.min.js"></script>
   <style type="text/css">
   	.logout{
		position: absolute;
		left: 92%;
		top: 93%;
		border: 0px solid white;
		height: 30px;
		width: 96px;
		cursor: pointer;
		background-color: #bfbfd4;
		border-radius: 10px;

	}
	.btn{
		position: absolute;
		left: 84%;
	    top: 93%;
	    border: 0px solid white;
	    height: 30px;
	    width: 96px;
	    cursor: pointer;
	    background-color: #bfbfd4;
	    border-radius: 10px;
	}

   </style>
</head>
<body>
	<form action="1.html">
	<div class="div">
		<h5 class="ch1">Reg. no:<?php echo " ".$_SESSION['reg1']?></h5>
		<h2 style="text-align: center; font-family: serif;">Birth Certificate</h2>
		<h4 style="text-align: center;font-family: serif;">This certifies that</h4>
		<h4 style="text-align: center;"><?php echo $_SESSION['fullname']." (".$_SESSION['gender'].")";?></h4>
		<hr class="chr1">
		<h4 style="text-align: center;font-family: serif;">was born to</h4>
		<h4 class="ch2"><?php echo $_SESSION['fname']?></h4> 
		<h4 style="text-align: center; font-family: serif;">and</h4>
		<h4 class="ch3"><?php echo $_SESSION['mname']?></h4>
		<hr class="chr2">
		<hr class="chr3">
		<h4 style="text-align: center;font-family: serif;">on this</h4>
		<h4 style="text-align: center;"><?php echo $_SESSION['bdate']?></h4>
		<hr class="chr4">
		<h4 style="text-align: center;font-family: serif;">at</h4>
		<h4 style="text-align: center;"><?php echo $_SESSION['btime']?></h4>
		<hr class="chr5">
		<h4 class="ch5">at</h4>
		<h4 class="ch6"><?php echo $_SESSION['bplace']?></h4>
		<h4 class="ch7">at</h4>
		<h4 class="ch8"><?php echo $_SESSION['bhospital']?></h4>
		<h4 class="ch9">Hospital.</h4>
		<hr class="chr6">
		<hr class="chr7">
		<hr class="chr8">
		<hr class="chr9">
		<h4 class="ch10">Created By</h4>
		<h4 class="ch11">Government Officer</h4>
	</div>
	<input type="button" id="create_pdf" value="Generate PDF" class="btn">
	
	<button class="logout" onclick="window.location.href='logout.php">Logout</button>
	</form>
	<script>  
    (function () {  
        var  
         form = $('.div'),  
         cache_width = form.width(),  
         a4 = [575, 700]; // for a4 size paper width and height  
  
        $('#create_pdf').on('click', function () {  
            $('body').scrollTop(0);  
            createPDF();  
        });  
         
        function createPDF() {  
            getCanvas().then(function (canvas) {  
                var  
                 img = canvas.toDataURL("image/png"),  
                 doc = new jsPDF({  
                     unit: 'px',  
                     format: 'a4'  
                 });  
                doc.addImage(img, 'JPEG', 30, 15);  
                doc.save('certificate.pdf');  
                form.width(cache_width);  
            });  
        }  
  
       
        function getCanvas() {  
            form.width((a4[0] * 1.33333) - 80).css('max-width', 'none');  
            return html2canvas(form, {  
                imageTimeout: 2000,  
                removeContainer: true  
            });  
        }  
  
    }());  
</script>
</body>
</html>