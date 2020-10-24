<?php session_start(); ?>
<?php 
$count = 0;
$roll = $_SESSION["student_id"];
$connection = mysqli_connect("localhost","root","","lms");
$res = mysqli_query($connection, " SELECT * FROM issued_books WHERE studentrollnumber =  '$roll' AND returnstatus='no'");
$count = mysqli_num_rows($res);

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title> New Arrival </title>
			<link rel="stylesheet" type="text/css" href="homeCSS.css">
			<link rel="stylesheet" type="text/css" href="arrivalCSS.css">
	</head>
	<body>

	<div id="top" class="headerPosition"></div>
	<header></header>
	<table class="headerPosition" id="header">
	  	<tr>
	 		<td>
	 			<img id="LogoPic" src="IMG-20181013-WA0000.png">
	 		</td>
	 		<td>
	 			<h1 id="logoText"> Shaheen Library Management </h1>
	 		</td>
		</tr>
	</table>

	<div id="home_page_pic_border">
		<div> <img id="home_page_pic" alt="New Arrival" src="newbooks.jpg"> </div>
	</div>
	
	<div id="shade" class="headerPosition" style="width: 1226px;"></div>

<!-- Start of Navigational Bar (Menu) -->

	<div  id="menu_div">
		<div  id="menu_div2">
		<nav>
			<a href="Home.php" class="menu"> Home </a>
			<span class="bar"> |</span>
			<a target="_blank" href="Collections.php" class="menu"> Collections </a>
			<span class="bar"> |</span>
			<a target="_blank" href="Issue Book.php" class="menu"> Issue Book </a>
			<span class="bar"> |</span>
			<a target="_blank" href="Profile.php" class="menu"> Your Profile </a>
			<span class="bar"> |</span>
			<a target="_blank" href="Messages.php" class="menu"> Messages (<?php echo $count ?>) </a>
			<span class="bar"> |</span>
			<a target="_blank" href="Services.php" class="menu"> Services </a>
			<span class="bar"> |</span>
			<a target="_blank" href="About Us.php" class="menu"> ABOUT US </a> 
			<span class="bar"> |</span>
			<a target="_blank" href="Contact Us.php" class="menu"> CONTACT US </a>
			<span class="bar"> |</span>
			<a href="login.php" class="menu"> Sign out </a>
        </nav>
        </div>
    </div>

	<!-- Start of Side bar (box) -->

	<div class="display_style" id="side_bar_border">
		<h1 id="quick_inks"> Quick Links </h1>
		<div id="side_bar">
			<div> <img class="side_bar_pic" src="nOpac.jpg"> </div>
			<div class="side_bar_text"> <a target="_blank" href="Online Catalog.php"> Online Catalog </a> </div>
			<br> <hr class="hr_style">
			<div> <img class="side_bar_pic" src="nMenu.jpg"> </div>
			<div class="side_bar_text"> <a target="_blank" href="Manuscript.php"> Manuscripts </a> </div>
			<br> <hr class="hr_style">
			<div> <img class="side_bar_pic" src="caligraphy.jpg"> </div>
			<div class="side_bar_text"> <a target="_blank" href="Caligraphy.php"> Caligraphy </a> </div>
			<br> <hr class="hr_style">
			<div> <img class="side_bar_pic" src="pdfLibrary.jpg"> </div>
			<div class="side_bar_text"> <a target="_blank" href="Digital library.php"> Digital Library </a> </div>
			<br> <hr class="hr_style">
			<div> <img class="side_bar_pic" src="nArrival.jpg"> </div>
			<div class="side_bar_text"> <a href="Arrival.php"> New Arrivals </a> </div>
			<br>
		</div>
	</div>

	<!-- Start of Message Box -->

	<br><br><br>
	<div class="display_style" id="box_layout" style="width: 930px; height: 1050px; margin-top: -58px;"> 

 		<h2><center> New Arrival </center></h2>

		<br> <p>Here you can find New Books of every weak. We update newly arrived books on every Monday.</p>
	   <br><br><br>

	   <!-- Start of Gallery -->

 		<h2><center> Gallery </center></h2>
	   <br><br><br>

		<div class="container"></div>

		<div>
		 	<div class="column">
    			<img src="arrival1.jpg" alt="Balance" class="gallery_image_layout"">
		 	</div>
		 	<div class="column">
		    	<img src="arrival2.jpg" alt="Practical Power System Operation" class="gallery_image_layout"">
		 	</div>
		 	<div class="column">
		    	<img src="arrival3.jpg" alt="Basics of Hacking" class="gallery_image_layout"">
		 	</div>
		 	<div class="column">
		    	<img src="arrival4.jpg" alt="Blackstone's Commentaries" class="gallery_image_layout"">
		 	</div>
		</div>

		<div class="row">
		 	<div class="column">
    			<img src="arrival5.jpg" alt="Careers" class="gallery_image_layout"">
		 	</div>
		 	<div class="column">
		    	<img src="arrival6.jpg" alt="Where Worlds Collide" class="gallery_image_layout"">
		 	</div>
		 	<div class="column">
		    	<img src="arrival7.jpg" alt="Smart Sensor System" class="gallery_image_layout"">
		 	</div>
		 	<div class="column">
		    	<img src="arrival8.jpg" alt="Jugdes & journals in Pakistan" class="gallery_image_layout"">
		 	</div>
		</div>

		<br><br>
	</div>    

<!-- Start of Footer -->

<div id="footer">
	<table id="footer_table">
		<tr>
			<td class="lineSpacing" id="footer_column1"> <p id="name"> Shaheen Library </p> <br> &#169; 2010 All Rights Reserved.</td>
			<div></div>
			<td class="lineSpacing" id="footer_column2"> <u><h3> Postal Address: </h3></u>
				<p> Shaheen Library, Lahore</p>
			</td>
			<td class="lineSpacing" id="footer_column3">
				<u><h3> E-mail / Phone / Fax: </h3></u>
				<p> E-mail: chieflibrarian@gmail.com </p>
				<p> Ph# 04212345678 </p>
				<p> Fax# 04212345678 </p>
			</td>
		</tr>
	</table>
</div>

</body>
</html>