<!DOCTYPE html>
<html>
<head>
	<title>Contact Me</title>
	<link rel="shortcut icon" href="IMAGES/titlebar.png" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="StyleSheets/HomeStyles.css">
</head>
<body>
	<div>
		<div class="header" id="myHeader">
			<ul class="navbarclass">
				<a href="index.php"><img class="logoimage" src="IMAGES/logo.png" alt="Srinija katikineni" title="Srinija Katikineni"></a>
				<li class="mobilenavbardisplaymenu"><a class="mobilenavbarlink" onclick="menu()"><label id="displaymenu"><span></span>	Show Menu</label></a></li>
				<li class="mobilenavbarlist" id="mobilenavbarlisthome"><a class="mobilenavbarlink" href="index.php">Home</a></li>
				<li class="mobilenavbarlist" id="mobilenavbarlistmydetails"><a class="mobilenavbarlink" href="MyDetails.php">My Details</a></li>
				<li class="mobilenavbarlist" id="mobilenavbarlistcontactform"><a class="mobilenavbarlink" href="ContactForm.php">Contact Form</a></li>
				<li class="mobilenavbarlist" id="mobilenavbarlistcontactme"><a class="mobilenavbarlink" href="ContactMe.php">Contact Me</a></li>
				<li class="navbarlist"><a class="navbarlink" href="ContactMe.php">Contact Me</a></li>
				<li class="navbarlist"><a class="navbarlink" href="ContactForm.php">Contact Form</a></li>
				<li class="navbarlist"><a class="navbarlink" href="MyDetails.php">My Details</a></li>
				<li class="navbarlist"><a class="navbarlink" href="index.php">Home</a></li>
			</ul>
		</div>

		<div class="content">
			<h1 style="text-align:center; font-weight:bold;">My Contact Details</h1>

			<table>
				<tr>
					<td style="height: 300px; width: 80%;">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3003.331807903711!2d-73.215314484926!3d41.17092957928462!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e80e3922639e37%3A0x1f4db32f95fadd05!2s1610+Fairfield+Ave%2C+Bridgeport%2C+CT+06605!5e0!3m2!1sen!2sus!4v1517337869898" width="100%" height="100%" frameborder="0" style="border:1px solid;" allowfullscreen></iframe>
					</td>
					<td style="width: 100%; height: 100%; padding-left: 30px;">
						<h4>APT G7</h4>
						<h4>1610 Fairfield Ave</h4>
						<h4>Bridgeport</h4>
						<h4>CT - 06605</h4>
						<h3><strong>Phone:</strong><h4>(203)-543-3992</h4></h3>
						<h3><strong>Email:</strong><h4>srinija84@gmail.com</h4></h3>
					</td>
				</tr>
			</table>
		</div>

		<div class="footer">
			<table style="width: 100%;">
				<tr>
					<td><a class="footerlink" href="index.php">Home</a></td>
					<td><a class="footerlink" href="MyDetails.php">My Details</a></td>
					<td><a class="footerlink" href="ContactForm.php">Contact Form</a></td>
					<td><a class="footerlink" href="ContactMe.php">Contact Me</a></td>
				</tr>
			</table>
			<br>
			<p>&copy; 2018 Srinija Katikineni.</p>
		</div>
	</div>

	<script type="text/javascript">
		window.onscroll = function() {myFunction()};

		var header = document.getElementById("myHeader");
		var sticky = header.offsetTop;

		function myFunction() 
		{
			// body...
  			if (window.pageYOffset >= sticky) 
  			{
    			header.classList.add("sticky");
  			} 
  			else 
  			{
    			header.classList.remove("sticky");
  			}
		}
		function menu() 
		{
		    var x = document.getElementById("displaymenu");
		    if (x.innerHTML == "Show Menu") 
		    {
		        x.innerHTML = "Hide Menu";
		        document.getElementById("mobilenavbarlisthome").style.display = "block";
		        document.getElementById("mobilenavbarlistmydetails").style.display = "block";
		        document.getElementById("mobilenavbarlistcontactform").style.display = "block";
		        document.getElementById("mobilenavbarlistcontactme").style.display = "block";
		        document.getElementById("mobilenavbarlisthome").style.transition = "0.7s";
		    }
		    else
		    {
		        x.innerHTML = "Show Menu";
		        document.getElementById("mobilenavbarlisthome").style.display = "none";
		        document.getElementById("mobilenavbarlistmydetails").style.display = "none";
		        document.getElementById("mobilenavbarlistcontactform").style.display = "none";
		        document.getElementById("mobilenavbarlistcontactme").style.display = "none";
		    }
		}
	</script>
</body>
</html>