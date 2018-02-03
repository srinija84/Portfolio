<?php
//Connection for database
include 'databaseconnector.php';
//Select Database
$sql = "SELECT * FROM contactform";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Contact Form</title>
	<link rel="shortcut icon" href="IMAGES/titlebar.png" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="StyleSheets/HomeStyles.css">
	<link rel="stylesheet" type="text/css" href="StyleSheets/ContactForm.css">
</head>
<body onload="document.registration.frstName.focus()">
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
			<form name='registration' method="POST" action="SaveData.php">
				<div>
					<table align="center" class="contactformtable">
						<tr style="background: #5F9EA0; color: white">
							<th colspan="2"><h1 style="text-align:center; font-weight:bold;">Contact Form</h1></th>
						</tr>
						<tr>
							<td style="float: right; padding:30px;">
								<label><b>First Name :</b></label>
							</td>
							<td>
								<input type="text" name="frstName" id="frstName" placeholder="  Enter First Name" style="border-radius: 25px; width: 230px;" required autofocus pattern="[a-zA-Z\s]{1,1000}" title="FIRST NAME MUST HAVE ALPHABET CHARACTERS ONLY!">	
							</td>
						</tr>
						<tr>
							<td>
							</td>
							<td>
								<p><b>(Enter Only Characters)</b></p>
							</td>
						</tr>
						<tr>
							<td style="float: right; padding:30px;">
								<label><b>Last Name :</b></label>
							</td>
							<td>
								<input type="text" name="lstName" id="lstName" placeholder="  Enter Last Name" style="border-radius: 25px; width: 230px;" required autofocus pattern="[a-zA-Z'-]{1,1000}" title="LAST NAME MUST HAVE ALPHABET CHARACTERS ONLY!">
							</td>
						</tr>
						<tr>
							<td>
								
							</td>
							<td>
								<p><b>(Character, Hyphens and Apostrophes are allowed)</b></p>
							</td>
						</tr>
						<tr>
							<td style="float: right; padding:30px;">
								<label><b>Email :</b></label>
							</td>
							<td>
								<input type="text" name="email" id="email" placeholder="  Enter Email id" style="border-radius: 25px; width: 230px;" required autofocus pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="ENTER EMAIL ID IN CORRECT FORMAT!">
							</td>
						</tr>
						<tr>
							<td style="float: right; padding:30px;">
								<label><b>ZipCode:</b></label>
							</td>
							<td>
								<input type="text" name="zipcode" id="zipcode" maxlength="5" placeholder="  Enter ZipCode" style="border-radius: 25px; width: 230px;" required autofocus pattern="[0-9]{5}" title="ENTER A VALID FIVE ZIPCODE WITH NUMERICAL VALUES!">
							</td>
						</tr>
						<tr>
							<td style="float: right; padding:30px;">
								<label><b>State:</b></label>
							</td>
							<td>
								<select style="border-radius: 25px;" id="state" name="state">
									<option value="AL">Alabama</option>
									<option value="AK">Alaska</option>
									<option value="AZ">Arizona</option>
									<option value="AR">Arkansas</option>
									<option value="CA">California</option>
									<option value="CO">Colorado</option>
									<option value="CT">Connecticut</option>
									<option value="DE">Delaware</option>
									<option value="DC">District Of Columbia</option>
									<option value="FL">Florida</option>
									<option value="GA">Georgia</option>
									<option value="HI">Hawaii</option>
									<option value="ID">Idaho</option>
									<option value="IL">Illinois</option>
									<option value="IN">Indiana</option>
									<option value="IA">Iowa</option>
									<option value="KS">Kansas</option>
									<option value="KY">Kentucky</option>
									<option value="LA">Louisiana</option>
									<option value="ME">Maine</option>
									<option value="MD">Maryland</option>
									<option value="MA">Massachusetts</option>
									<option value="MI">Michigan</option>
									<option value="MN">Minnesota</option>
									<option value="MS">Mississippi</option>
									<option value="MO">Missouri</option>
									<option value="MT">Montana</option>
									<option value="NE">Nebraska</option>
									<option value="NV">Nevada</option>
									<option value="NH">New Hampshire</option>
									<option value="NJ">New Jersey</option>
									<option value="NM">New Mexico</option>
									<option value="NY">New York</option>
									<option value="NC">North Carolina</option>
									<option value="ND">North Dakota</option>
									<option value="OH">Ohio</option>
									<option value="OK">Oklahoma</option>
									<option value="OR">Oregon</option>
									<option value="PA">Pennsylvania</option>
									<option value="RI">Rhode Island</option>
									<option value="SC">South Carolina</option>
									<option value="SD">South Dakota</option>
									<option value="TN">Tennessee</option>
									<option value="TX">Texas</option>
									<option value="UT">Utah</option>
									<option value="VT">Vermont</option>
									<option value="VA">Virginia</option>
									<option value="WA">Washington</option>
									<option value="WV">West Virginia</option>
									<option value="WI">Wisconsin</option>
									<option value="WY">Wyoming</option>
								</select>
							</td>
						</tr>
						<tr>
							<td colspan="2" align="center">
								<input type="reset" name="Clear" value="Clear" class="btn">
								<input type="submit" name="submit" value="Submit" class="btn">
								<br><br>
							</td>
						</tr>
					</table>
				</div>
				



				
				<br>
				<div style="text-align: center;">
					<table border="1" align="center" style="line-height:25px;">
						<tr>
							<th colspan="6" style="background: #5F9EA0; color: white">
								<h1 style="text-align:center; font-weight:bold;">List of Users tried to contact</h1>
							</th>
						</tr>
						<tr style="background-color: blue; color: white;">
							<th style="text-align: center; width: 5%">ID</th>
							<th style="text-align: center; width: 15%">First Name</th>
							<th style="text-align: center; width: 15%">Last Name</th>
							<th style="text-align: center; width: 25%">Email Id</th>
							<th style="text-align: center; width: 15%">Zipcode</th>
							<th style="text-align: center; width: 10%">State</th>
						</tr>
						<?php
							if($result->num_rows > 0){
							 while($row = $result->fetch_assoc()){
						?>
								 <tr style="background-color: lightgreen;">
									 <td><?php echo $row['id']; ?></td>
									 <td><?php echo $row['firstname']; ?></td>
									 <td><?php echo $row['lastname']; ?></td>
									 <td><?php echo $row['email']; ?></td>
									 <td><?php echo $row['zipcode']; ?></td>
									 <td><?php echo $row['state']; ?></td>
							 	</tr>
						 <?php
					 			}
							}
							else
							{
					 	?>
					 			<tr>
					 				<th colspan="2">There's No data found!!!</th>
					 			</tr>
					 	<?php
							}
						?>
					</table>
				</div>
			</form>	
		</div>
		<br>
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