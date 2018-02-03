<!DOCTYPE html>
<html>
<head>
	<title>My Details</title>
	<link rel="shortcut icon" href="IMAGES/titlebar.png" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="StyleSheets/HomeStyles.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<style type="text/css">
		#resumesidenav
		{
			width: 100%;
		}
		#resumesidenav a
		{
			text-decoration: none;
			padding: 20px;
			border: 1px solid black;
			border-radius: 10px;
			font-size: 20px;
		}
	</style>
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
			<br>
			<div class="box" style="text-align: justify;">
				<div>										
					<h1 style="text-align:center; font-weight:bold;">My Resume</h1>
					<br>
					<div id="resumesidenav" style="width: 100%;">
						<a href="#careerobjective">Career Objective</a>
						<a href="#technicalSkills">Technical Skills</a>
						<a href="#education">Education</a>
						<a href="#professionalexperience">Professional Experience</a>
						<a href="#projects">Projects</a>
						<a href="https://www.linkedin.com/in/srinijak/">Linkedin URL</a>
						<a href="https://github.com/srinija84">GitHub URL</a>
					</div>
				</div>
				<br><br>
				<div id="careerobjective">
					<h3 style="font-weight: bold;">Career Objective :</h3>
					<p style="text-align: justify;"><b>Above 3+ years of IT experience </b>in all phases of<b> Software Development Life Cycle (SDLC) </b>such as<b>Planning, Analysis, Design, Implementation, Testing </b>and <b>Maintenance</b> of <b>Web Applications. </b>Wide knowledge and proven experience in web development and maintenance. A self-starter, quick learner and capable of working independently to achieve milestones and deadlines. Adept at prioritizing, tracking and completing tasks to accomplish project goals.</p>
				</div>
				<div id="technicalSkills">
					<h3 style="font-weight: bold;">Technical Skills :</h3>
					<table style="width: 60%; border: 1px solid black;">
						<tr>
							<td style="width: 30%; padding: 30px; border: 1px solid black;"><b>Languages</b></td>
							<td style="width: 70%; padding: 30px; border: 1px solid black;">Java, C, C++, C#, .NET, AJAX, JSON, Node JS, HTML, CSS, XML, Javascript, JQuery, Unix/Linux commands, Python, PHP, Wordpress, Bootstrap, PL/SQL</td>
						</tr>
						<tr>
							<td style="width: 30%; padding: 30px; border: 1px solid black;"><b>Tools & Frameworks</b></td>
							<td style="width: 70%; padding: 30px; border: 1px solid black;">Spring-ORM, Spring-AOP, spring batch, spring security, spring boot, Hibernate, Maven, ERWIN, Eclipse, Visual Studio, Sublime Text, NetBeans, IntelliJ</td>
						</tr>
						<tr>
							<td style="width: 30%; padding: 30px; border: 1px solid black;"><b>J2EE Technologies</b></td>
							<td style="width: 70%; padding: 30px; border: 1px solid black;">Servlets, JSP, JDBC, JMS, JSF, JSTL, EJB</td>
						</tr>
						<tr>
							<td style="width: 30%; padding: 30px; border: 1px solid black;"><b>Version Control Tools</b></td>
							<td style="width: 70%; padding: 30px; border: 1px solid black;">SVN, GIT</td>
						</tr>
						<tr>
							<td style="width: 30%; padding: 30px; border: 1px solid black;"><b>Testing</b></td>
							<td style="width: 70%; padding: 30px; border: 1px solid black;">Junit, Selenium Webdriver</td>
						</tr>
						<tr>
							<td style="width: 30%; padding: 30px; border: 1px solid black;"><b>Database</b></td>
							<td style="width: 70%; padding: 30px; border: 1px solid black;">MySQL, Oracle, SQL-Server,SQL</td>
						</tr>
						<tr>
							<td style="width: 30%; padding: 30px; border: 1px solid black;"><b>Web/App Servers</b></td>
							<td style="width: 70%; padding: 30px; border: 1px solid black;">SOAP, REST, AWS(Amazon Web Services), SOAP, RESTful, Amazon Web Services (AWS), Micro Services Web Sphere, Web Logic, Apache Tomcat</td>
						</tr>
						<tr>
							<td style="width: 30%; padding: 30px; border: 1px solid black;"><b>Knowledge-on</b></td>
							<td style="width: 70%; padding: 30px; border: 1px solid black;">Log4j, JBOSS, ITIL, ITSM, Node.js, React.js, ERP, CRM</td>
						</tr>
					</table>
				</div>
				<div id="education">
					<h3 style="font-weight: bold;">Education :</h3>
					<table style="width: 90%;">
						<tr>
							<td><b>M.S. Computer Science</b></td>
							<td><b>GPA:</b> 3.51</td>
							<td>University of Bridgeport</td>
							<td>May 2017</td>
						</tr>
						<tr>
							<td><b>B.Tech. Computer Science</b></td>
							<td><b>GPA:</b> 3.4</td>
							<td>JNTU K, India</td>
							<td>April 2014</td>
						</tr>
					</table>
				</div>
				<div id="professionalexperience">
					<h3 style="font-weight: bold;">Professional Experience :</h3>
					<table style="width: 100%;">
						<tr>
							<td style="width: 15%; padding: 10px;"><b>Client</b><b style="float: right;">:</b></td>
							<td style="width: 70%; padding: 10px;"><b>AllianceIT, San Ramon, CA</b></td>
							<td><b>June 2017 -  Jan 2018</b></td>
						</tr>
						<tr>
							<td style="width: 15%; padding: 10px;"><b>Title</b><b style="float: right;">:</b></td>
							<td style="width: 70%; padding: 10px;"><b>Junior Software Engineer</b></td>
						</tr>
						<tr>
							<td style="width: 15%; padding: 10px;"></td>
							<td style="width: 70%; padding: 10px;">
								<ul>
									<li style="padding: 10px;">Designed the application based on Spring framework using MVC design pattern Singleton, Model View Controller (MVC)</li>
									<li style="padding: 10px;">Developed different components required for the application like Spring Services, Data Access Objects (DAO).</li>
									<li style="padding: 10px;">Used MQ services, SOA architecture paradigms, SOAP Web Services. Assisted for the front end developers using HTML, JQuery, Javascript and AngularJS.</li>
									<li style="padding: 10px;">Creating custom PHP forms & Documenting the portal.</li>
									<li style="padding: 10px;">Executing Selenium Test Cases and Reporting defects.</li>
									<li style="padding: 10px;">Designed and developed JSP and Servlets to build the presentation.</li>
									<li style="padding: 10px;">Consumed Rest API to interact with external vendor.</li>
								</ul>
							</td>
						</tr>
						<tr>
							<td style="width: 15%; padding: 10px;"><b>Environment</b><b style="float: right;">:</b></td>
							<td style="width: 70%; padding: 10px;"><b>Java, J2EE, AJAX, JPA, HTML, CSS, JavaScript, Bootstrap, Maven, SQL, Hibernate, Spring MVC, Spring boot, SOAP, REST, Eclipse, XML, JSON, Multithreading, Angular JS, PHP, XML, oracle, Junit, PL/SQL, Selenium webdriver</b></td>
						</tr>
						<tr>
							<td style="width: 15%; padding: 10px;"><b>Client</b><b style="float: right;">:</b></td>
							<td style="width: 70%; padding: 10px;"><b>University of Bridgeport</b></td>
							<td><b>May 2016 - April 2017</b></td>
						</tr>
						<tr>
							<td style="width: 15%; padding: 10px;"><b>Title</b><b style="float: right;">:</b></td>
							<td style="width: 70%; padding: 10px;"><b>Graduate Teaching Assistant, CT</b></td>
						</tr>
						<tr>
							<td style="width: 15%; padding: 10px;"></td>
							<td style="width: 70%; padding: 10px;">
								<ul>
									<li style="padding: 10px;">Assists the faculty in designing the assessments and exam procedures.</li>
									<li style="padding: 10px;">Perform code reviews on projects for about 20 teams.</li>
									<li style="padding: 10px;">Assists students in debugging their code to fix issues and clear their doubts.</li>
									<li style="padding: 10px;">Grading team projects and evaluate their performance.</li>
								</ul>
							</td>
						</tr>
						<tr>
							<td style="width: 15%; padding: 10px;"><b>Client</b><b style="float: right;">:</b></td>
							<td style="width: 70%; padding: 10px;"><b>Indian Servers, Hyderabad, India</b></td>
							<td><b>May 2014 - Dec 2015</b></td>
						</tr>
						<tr>
							<td style="width: 15%; padding: 10px;"><b>Title</b><b style="float: right;">:</b></td>
							<td style="width: 70%; padding: 10px;"><b>Full Stack Developer</b></td>
						</tr>
						<tr>
							<td style="width: 15%; padding: 10px;"></td>
							<td style="width: 70%; padding: 10px;">
								<ul>
									<li style="padding: 10px;">Online Banking application used for Account creation, Payments, Approvals and Calculations.</li>
									<li style="padding: 10px;">Extensively use of Core Java features (collection, exception handling, generics and annotation), JSP, JavaScript and JDBC to create web Servlets in Eclipse.</li>
									<li style="padding: 10px;">Part of the Presentation and validation layers using JSP, HTML5, CSS3 Custom Tag Libraries, parsing the XML files and JQuery validation package. </li>
									<li style="padding: 10px;">Build websites using WordPress.</li>
									<li style="padding: 10px;">Analyzed SQL queries, stored procedures, Triggers and functions for the application in Oracle. Used SVN for version control, JIRA for bug and issue tracking. Performed configurations and day to day activities using JBOSS.</li>
								</ul>
							</td>
						</tr>
						<tr>
							<td style="width: 15%; padding: 10px;"><b>Environment</b><b style="float: right;">:</b></td>
							<td style="width: 70%; padding: 10px;"><b>Java, J2EE, AJAX, JSP, Wordpress, HTML, CSS, JQuery, JavaScript, Bootstrap, Maven, SQL, PL/SQL, Spring MVC,Eclipse, EJB, XML, JSON, oracle, log4j, MVC, Agile, spring boot, Hibernate, XML, multithreading, Selenium, PHP, JUnit</b></td>
						</tr>
						<tr>
							<td style="width: 15%; padding: 10px;"><b>Client</b><b style="float: right;">:</b></td>
							<td style="width: 70%; padding: 10px;"><b>NISI Solutions, Hyderabad, India</b></td>
							<td><b>May 2012 -  Aug 2012</b></td>
						</tr>
						<tr>
							<td style="width: 15%; padding: 10px;"><b>Title</b><b style="float: right;">:</b></td>
							<td style="width: 70%; padding: 10px;"><b>IT Intern</b></td>
						</tr>
						<tr>
							<td style="width: 15%; padding: 10px;"></td>
							<td style="width: 70%; padding: 10px;">
								<ul>
									<li style="padding: 10px;">Developed and maintained a web application using HTML , Bootstrap and CSS.</li>
									<li style="padding: 10px;">Created, Upgrading, and Maintaining the JavaScript libraries and widgets so that the data is managed the same way regardless of when the form was developed.</li>
									<li style="padding: 10px;">Used Core Java techniques like Collections and Generics in the development phase.</li>
									<li style="padding: 10px;">Developed SQL queries, stored procedures wherever applicable.</li>
								</ul>
							</td>
						</tr>
						<tr>
							<td style="width: 15%; padding: 10px;"><b>Environment</b><b style="float: right;">:</b></td>
							<td style="width: 70%; padding: 10px;"><b>Java Java, HTML, CSS, JavaScript, JSP, Servlets, JDBC, MVC Design pattern, PL/SQL, Apache Tomcat server, My SQL, Eclipse IDE, CVS, ANT, XML, Log4J.</b></td>
						</tr>
					</table>
				</div>
				<div class="projects" id="projects">
					<h3 style="font-weight: bold;">Projects :</h3>
					<p style="width: 100%; padding: 10px;"><b>Connecting Social Media to E-Commerce(IEEE paper)</b><b style="float: right;">Jan 2017 - May 2017</b></p>
					<p style="padding: 10px;">Implemented this project based on the IEEE paper to recommend products to users of social networking sites to new users of the E-commerce website. Developed Java server Pages web application using JSP Tags, Spring–tags, HTML5, CSS, XML in Eclipse IDE. Database Design is done in SQLITE database.</p>
					<p style="width: 100%; padding: 10px;"><b>Airlines Reservation System (oracle )</b><b style="float: right;">Aug 2016 - Dec 2016 </b></p>
					<p style="padding: 10px;">Aimed at easing the reservation process. Implemented ER, EER diagram in ERWIN, database in Oracle   Database 10g.Wrote SQL Queries, Stored Procedures and Functions. Stand Alone Application was developed in .NET with JDBC-ODBC Bridge connection for database access with the front end.. Agencies and customers can get an updated information about their reservation using the website.</p>
					<p style="width: 100%; padding: 10px;"><b>Hospital Management System</b><b style="float: right;">August 2016 - Dec 2016</b></p>
					<p style="padding: 10px;">This project is to help health care organizations focusing on delivery, security and interoperability opening up communications between patients, hospitals, specialists and labs. Used CENTOS in VMWARE WorkStation for writing Linux/Unix program which is menu driven, to populate these databases and then to fetch information from. The scripts used getop function and awk scripting as well.</p>
					<p style="width: 100%;padding: 10px;"><b>Vehicle Insurance</b><b style="float: right;">June 2016 - Sept 2016</b></p>
					<p style="padding: 10px;">The purpose of the project is to build an application program to reduce the manual work for managing the Insurance period, Registrations and Customer details. Developed over the Django framework all the business logic has been implemented in python. Front end logic using JSP with Mysql database.</p>
					<p style="width: 100%;padding: 10px;"><b>Deploying an Elastic HPC Cluster</b><b style="float: right;">June 2016 - Sept 2016 </b></p>
					<p style="padding: 10px;">This was the course project for Cloud Computing Course. Developed this project to show how the resources are scalable in cloud for High Performance computing workloads. Built and configured a virtual data center in the Amazon Web Services cloud to support Enterprise Data Warehouse hosting including Virtual Private Cloud (VPC), Public and Private Subnets, Security Groups, Route Tables, Elastic Load Balancer and AMIs, Auto scaling to design cost effective, fault tolerant and highly available systems.</p>
					<p style="width: 100%;padding: 10px;"><b>Software Quiz</b><b style="float: right;">Jan 2016 - April 2016</b></p>
					<p style="padding: 10px;">The main aim of this project is to develop a single page web application where a user can play quiz on the spring framwork. Designed and developed the application using HTML5, CSS3, JavaScript, and Angular JS.Used different angular directives like ng-class, ng-show, ng-click etc. on this application. Written controller's logic based on the business requirements. Styled different components of the web pages to look more attractive and responsive using CSS3 media queries</p>
				</div>
				<br>
			</div>
			<br><br>
			<div class="mobilemydetailsdisplay">
				<h1 style="text-align:center; font-weight:bold;">My Resume</h1>
				<div class="mobilecareerobjective">
					<a  href="javascript:mobilemydetailsdisplaycareerobjective()"><h3 class="mobilecareerobjectiveheader">Career Obejective</h3></a>
					<div id="mobilecareerobjective">
						<p style="text-align: justify;"><b>Above 3+ years of IT experience </b>in all phases of<b> Software Development Life Cycle (SDLC) </b>such as<b>Planning, Analysis, Design, Implementation, Testing </b>and <b>Maintenance</b> of <b>Web Applications. </b>Wide knowledge and proven experience in web development and maintenance. A self-starter, quick learner and capable of working independently to achieve milestones and deadlines. Adept at prioritizing, tracking and completing tasks to accomplish project goals.</p>
					</div>
				</div>
				<div class="mobiletechnicalSkills">
					<a href="javascript:mobilemydetailsdisplaytechnicalSkills()"><h3 class="mobiletechnicalSkillsheader">Technical Skills</h3></a>
					<div id="mobiletechnicalSkills">
						<h4><b>Languages :</b></h4>
						<p>Java, C, C++, C#, .NET, AJAX, JSON, Node JS, HTML, CSS, XML, Javascript, JQuery, Unix/Linux commands, Python, PHP, Wordpress, Bootstrap, PL/SQL</p>
						<h4><b>Tools & Frameworks :</b></h4>
						<p>Spring-ORM, Spring-AOP, spring batch, spring security, spring boot, Hibernate, Maven, ERWIN, Eclipse, Visual Studio, Sublime Text, NetBeans, IntelliJ</p>
						<h4><b>J2EE Technologies :</b></h4>
						<p>Servlets, JSP, JDBC, JMS, JSF, JSTL, EJB</p>
						<h4><b>Version Control Tools :</b></h4>
						<p>SVN, GIT</p>
						<h4><b>Testing :</b></h4>
						<p>Junit, Selenium Webdriver</p>
						<h4><b>Database :</b></h4>
						<p>MySQL, Oracle, SQL-Server,SQL</p>
						<h4><b>Web/App Servers :</b></h4>
						<p>SOAP, REST, AWS(Amazon Web Services), SOAP, RESTful, Amazon Web Services (AWS), Micro Services Web Sphere, Web Logic, Apache Tomcat</p>
						<h4><b>Knowledge-on :</b></h4>
						<p>Log4j, JBOSS, ITIL, ITSM, Node.js, React.js, ERP, CRM</p>
					</div>
				</div>
				<div class="mobileeducation">
					<a href="javascript:mobilemydetailsdisplayeducation()"><h3 class="mobileeducationheader">Education</h3></a>
					<div id="mobileeducation">
						<h4><b>M.S. Computer Science</b></h4>
						<h5><b>GPA :</b> 3.51</h5>
						<h5>University of Bridgeport</h5>
						<h5>May 2017</h5>
						<h4><b>B.Tech. Computer Science</b></h4>
						<h5><b>GPA :</b> 3.4</h5>
						<h5>JNTU K, India</h5>
						<h5>April 2014</h5>
					</div>
				</div>
				<div class="mobileprofessionalexperience">
					<a href="javascript:mobilemydetailsdisplayprofessionalexperience()"><h3 class="mobileprofessionalexperienceheader">Professional Experience</h3></a>
					<div id="mobileprofessionalexperience">
						<h4><b>Client : </b> AllianceIT, San Ramon, CA</h4>
						<h4><b>Title : </b>Junior Software Engineer</h4>
						<h5>
							<ul>
								<li style="padding-bottom: 5%;">Designed the application based on Spring framework using MVC design pattern Singleton, Model View Controller (MVC)</li>
								<li style="padding-bottom: 5%;">Developed different components required for the application like Spring Services, Data Access Objects (DAO).</li>
								<li style="padding-bottom: 5%;">Used MQ services, SOA architecture paradigms, SOAP Web Services. Assisted for the front end developers using HTML, JQuery, Javascript and AngularJS.Creating custom PHP forms & Documenting the portal.</li>
								<li style="padding-bottom: 5%;">Creating custom PHP forms & Documenting the portal.</li>
								<li style="padding-bottom: 5%;">Executing Selenium Test Cases and Reporting defects.</li>
								<li style="padding-bottom: 5%;">Designed and developed JSP and Servlets to build the presentation.</li>
								<li style="padding-bottom: 5%;">Consumed Rest API to interact with external vendor.</li>
							</ul>
						</h5>
						<h4><b>Environment : </b></h4>
						<h5>Java, J2EE, AJAX, JPA, HTML, CSS, JavaScript, Bootstrap, Maven, SQL, Hibernate, Spring MVC, Spring boot, SOAP, REST, Eclipse, XML, JSON, Multithreading, Angular JS, PHP, XML, oracle, Junit, PL/SQL, Selenium webdriver</h5>
						<h4><b>Client : </b> University of Bridgeport</h4>
						<h4><b>Title : </b> Graduate Teaching Assistant, CT</h4>
						<h5>
							<ul>
								<li style="padding-bottom: 5%">Assists the faculty in designing the assessments and exam procedures.</li>
								<li style="padding-bottom: 5%">Perform code reviews on projects for about 20 teams.</li>
								<li style="padding-bottom: 5%">Assists students in debugging their code to fix issues and clear their doubts.</li>
								<li style="padding-bottom: 5%">Grading team projects and evaluate their performance.</li>
							</ul>
						</h5>
						<h4><b>Client : </b> Indian Servers, Hyderabad, India</h4>
						<h4><b>Title : </b> Full Stack Developer</h4>
						<h5>
							<ul>
								<li style="padding-bottom: 5%">Online Banking application used for Account creation, Payments, Approvals and Calculations.</li>
								<li style="padding-bottom: 5%">Extensively use of Core Java features (collection, exception handling, generics and annotation), JSP, JavaScript and JDBC to create web Servlets in Eclipse.</li>
								<li style="padding-bottom: 5%">Part of the Presentation and validation layers using JSP, HTML5, CSS3 Custom Tag Libraries, parsing the XML files and JQuery validation package.</li>
								<li style="padding-bottom: 5%">Build websites using WordPress.</li>
								<li style="padding-bottom: 5%">Analyzed SQL queries, stored procedures, Triggers and functions for the application in Oracle. Used SVN for version control, JIRA for bug and issue tracking. Performed configurations and day to day activities using JBOSS.</li>
							</ul>
						</h5>
						<h4><b>Environment : </b> </h4>
						<h5>Java, J2EE, AJAX, JSP, Wordpress, HTML, CSS, JQuery, JavaScript, Bootstrap, Maven, SQL, PL/SQL, Spring MVC,Eclipse, EJB, XML, JSON, oracle, log4j, MVC, Agile, spring boot, Hibernate, XML, multithreading, Selenium, PHP, JUnit</h5>
						<h4><b>Client : </b> NISI Solutions, Hyderabad, India</h4>
						<h4><b>Title : </b> IT Intern</h4>
						<h5>
							<ul>
								<li style="padding-bottom: 5%">Developed and maintained a web application using HTML , Bootstrap and CSS.</li>
								<li style="padding-bottom: 5%">Created, Upgrading, and Maintaining the JavaScript libraries and widgets so that the data is managed the same way regardless of when the form was developed.</li>
								<li style="padding-bottom: 5%">Used Core Java techniques like Collections and Generics in the development phase.</li>
								<li style="padding-bottom: 5%">Developed SQL queries, stored procedures wherever applicable.</li>
							</ul>
						</h5>
						<h4><b>Environment : </b> </h4>
						<h5>Java Java, HTML, CSS, JavaScript, JSP, Servlets, JDBC, MVC Design pattern, PL/SQL, Apache Tomcat server, My SQL, Eclipse IDE, CVS, ANT, XML, Log4J.</h5>
					</div>
				</div>
				<div class="mobileprojects">
					<a href="javascript:mobilemydetailsdisplayprojects()"><h3 class="mobileprojectsheader">Projects</h3></a>
					<div id="mobileprojects">
						<h4><b>Connecting Social Media to E-Commerce(IEEE paper)</b></h4>
						<h4><b>Jan 2017 - May 2017</b></h4>
						<h5>Implemented this project based on the IEEE paper to recommend products to users of social networking sites to new users of the E-commerce website. Developed Java server Pages web application using JSP Tags, Spring–tags, HTML5, CSS, XML in Eclipse IDE. Database Design is done in SQLITE database.</h5>
						<h4><b>Airlines Reservation System (oracle )</b></h4>
						<h4><b>Aug 2016 - Dec 2016</b></h4>
						<h5>Aimed at easing the reservation process. Implemented ER, EER diagram in ERWIN, database in Oracle   Database 10g.Wrote SQL Queries, Stored Procedures and Functions. Stand Alone Application was developed in .NET with JDBC-ODBC Bridge connection for database access with the front end.. Agencies and customers can get an updated information about their reservation using the website.</h5>
						<h4><b>Hospital Management System</b></h4>
						<h4><b>August 2016 - Dec 2016</b></h4>
						<h5>This project is to help health care organizations focusing on delivery, security and interoperability opening up communications between patients, hospitals, specialists and labs. Used CENTOS in VMWARE WorkStation for writing Linux/Unix program which is menu driven, to populate these databases and then to fetch information from. The scripts used getop function and awk scripting as well.</h5>
						<h4><b>Vehicle Insurance</b></h4>
						<h4><b>June 2016 - Sept 2016</b></h4>
						<h5>The purpose of the project is to build an application program to reduce the manual work for managing the Insurance period, Registrations and Customer details. Developed over the Django framework all the business logic has been implemented in python. Front end logic using JSP with Mysql database.</h5>
						<h4><b>Deploying an Elastic HPC Cluster</b></h4>
						<h4><b>June 2016 - Sept 2016</b></h4>
						<h5>This was the course project for Cloud Computing Course. Developed this project to show how the resources are scalable in cloud for High Performance computing workloads. Built and configured a virtual data center in the Amazon Web Services cloud to support Enterprise Data Warehouse hosting including Virtual Private Cloud (VPC), Public and Private Subnets, Security Groups, Route Tables, Elastic Load Balancer and AMIs, Auto scaling to design cost effective, fault tolerant and highly available systems.</h5>
						<h4><b>Software Quiz</b></h4>
						<h4><b>Jan 2016 - April 2016</b></h4>
						<h5>The main aim of this project is to develop a single page web application where a user can play quiz on the spring framwork. Designed and developed the application using HTML5, CSS3, JavaScript, and Angular JS.Used different angular directives like ng-class, ng-show, ng-click etc. on this application. Written controller's logic based on the business requirements. Styled different components of the web pages to look more attractive and responsive using CSS3 media queries</h5>
					</div>
				</div>
			</div>
			<br>
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
		function toggleSidebar()
		{
			// body...
			document.getElementById("resumesidenav").classList.toggle('active');
		}


		$(document).ready(function()
		{
  			$("a").on('click', function(event) 
  			{
    			if (this.hash !== "") 
    			{
      				event.preventDefault();
      				var hash = this.hash;
      				$('html, body').animate({
        				scrollTop: $(hash).offset().top
      				}, 3000, function(){
        		window.location.hash = hash;});
    			}
  			});
		});
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
		function mobilemydetailsdisplaycareerobjective()
		{
			// body...
			var x = document.getElementById("mobilecareerobjective");
			if (x.style.display == "none")
			{
				x.style.display = "block"
			}
			else
			{
				x.style.display = "none";
			}
		}
		function mobilemydetailsdisplaytechnicalSkills()
		{
			// body...
			var x = document.getElementById("mobiletechnicalSkills");
			if (x.style.display == "none")
			{
				x.style.display = "block"
			}
			else
			{
				x.style.display = "none";
			}
		}
		function mobilemydetailsdisplayeducation()
		{
			// body...
			var x = document.getElementById("mobileeducation");
			if (x.style.display == "none")
			{
				x.style.display = "block"
			}
			else
			{
				x.style.display = "none";
			}
		}
		function mobilemydetailsdisplayprofessionalexperience()
		{
			// body...
			var x = document.getElementById("mobileprofessionalexperience");
			if (x.style.display == "none")
			{
				x.style.display = "block"
			}
			else
			{
				x.style.display = "none";
			}
		}
		function mobilemydetailsdisplayprojects()
		{
			// body...
			var x = document.getElementById("mobileprojects");
			if (x.style.display == "none")
			{
				x.style.display = "block"
			}
			else
			{
				x.style.display = "none";
			}
		}
	</script>
</body>
</html>