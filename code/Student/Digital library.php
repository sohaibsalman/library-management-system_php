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
	<title> Digital Library </title>
		<link rel="stylesheet" type="text/css" href="homeCSS.css">
		<link rel="stylesheet" type="text/css" href="arrivalCSS.css">
		<link rel="stylesheet" type="text/css" href="digitalCSS.css">

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
		<div> <img id="home_page_pic" alt="Digital Library" src="digital-library.png"> </div>
	</div>
	
	<div id="shade" class="headerPosition"></div>

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


	<!-- Start of Message Box -->
	<br><br><br>
	<div class="display_style" id="box_layout"> 

 		<h1><center> Digital Library </center></h1>
 		<br> <p> Shaheen Library presnts a selected collection of books in PDF to read online and download.</p>
	   <br><br><br><br>

		<div class="container"></div>

 		<h2><center><u> Islamic </u></center></h2>
	   <br>
		<div>
		 	<div class="column">
    			<img src="Islamic1.png" alt="Maaarif ul Quran" class="gallery_image_layout"">
		 	</div>
		 	<div class="column">
		    	<img src="Islamic2.png" alt="Al-Minhaj Al-Sawi" class="gallery_image_layout"">
		 	</div>
		 	<div class="column">
		    	<img src="Islamic3.png" alt="Meezan" class="gallery_image_layout"">
		 	</div>
		</div>
		<!-- Names -->
		<div class="book_name" style="margin-left: 30px;"> Maaarif ul Quran </div>
		<div class="book_name" style=""> Al-Minhaj Al-Sawi </div>
		<div class="book_name"> Meezan </div>

		<!-- Buttons -->
		<a target="_blank" href="D:\PUCIT\Semester III\Subjects\Database Managment Systems\Project\Project\7 Project lms (WEB)\Books\Maaarif ul Quran Vol 1.pdf"> <button class="digital_btn" style="margin-left: 43px;"> Read Online </button> </a>
		<button class="digital_btn"> Download </button>
		<a target="_blank" href="D:\PUCIT\Semester III\Subjects\Database Managment Systems\Project\Project\7 Project lms (WEB)\Books\المنہاج السوی.pdf"> <button class="digital_btn" style="margin-left: 78px;"> Read Online </button> </a>
		<button class="digital_btn"> Download </button>
		<a target="_blank" href="D:\PUCIT\Semester III\Subjects\Database Managment Systems\Project\Project\7 Project lms (WEB)\Books\Meezan.pdf"> <button class="digital_btn" style="margin-left: 75px;"> Read Online </button> </a>
		<button class="digital_btn"> Download </button>

		<br><br><br><br><br><br><br><br>
 		<h2><center><u> English </u></center></h2>
	   <br>
		<div>
		 	<div class="column">
    			<img src="eng1.png" alt="Brida" class="gallery_image_layout"">
		 	</div>
		 	<div class="column">
		    	<img src="eng2.png" alt="The Alchemist" class="gallery_image_layout"">
		 	</div>
		 	<div class="column">
		    	<img src="eng3.png" alt="Sherlock Holmes" class="gallery_image_layout"">
		 	</div>
		</div>
		<!-- Names -->
		<div class="book_name" style="margin-left: 30px;"> Brida </div>
		<div class="book_name" style=""> The Alchemist </div>
		<div class="book_name"> Sherlock Holmes </div>

		
		<!-- Buttons -->
		<a target="_blank" href="D:\PUCIT\Semester III\Subjects\Database Managment Systems\Project\Project\7 Project lms (WEB)\Books\Brida.pdf"> <button class="digital_btn" style="margin-left: 43px;"> Read Online </button> </a>
		<button class="digital_btn"> Download </button>
		<a target="_blank" href="D:\PUCIT\Semester III\Subjects\Database Managment Systems\Project\Project\7 Project lms (WEB)\Books\The Alchemist.pdf"> <button class="digital_btn" style="margin-left: 78px;"> Read Online </button> </a>
		<button class="digital_btn"> Download </button>
		<a target="_blank" href="D:\PUCIT\Semester III\Subjects\Database Managment Systems\Project\Project\7 Project lms (WEB)\Books\Sherlock Holmes.pdf"> <button class="digital_btn" style="margin-left: 75px;"> Read Online </button> </a>
		<button class="digital_btn"> Download </button>

		<br><br><br><br><br><br><br><br>
 		<h2><center><u> Urdu </u></center></h2>
	   <br>
		<div>
		 	<div class="column">
    			<img src="urdu1.png" alt="Namal" class="gallery_image_layout"">
		 	</div>
		 	<div class="column">
		    	<img src="urdu2.png" alt="Khaak aur Khoon" class="gallery_image_layout"">
		 	</div>
		 	<div class="column">
		    	<img src="urdu3.png" alt="Dastan Iman Faroshon Ki" class="gallery_image_layout"">
		 	</div>
		</div>
		<!-- Names -->
		<div class="book_name" style="margin-left: 30px;"> Namal </div>
		<div class="book_name" style=""> Khaak aur Khoon </div>
		<div class="book_name"> Dastan Iman Faroshon Ki </div>

		
		<!-- Buttons -->
		<a target="_blank" href="D:\PUCIT\Semester III\Subjects\Database Managment Systems\Project\Project\7 Project lms (WEB)\Books\Namal.pdf"> <button class="digital_btn" style="margin-left: 43px;"> Read Online </button> </a>
		<button class="digital_btn"> Download </button>
		<a target="_blank" href="D:\PUCIT\Semester III\Subjects\Database Managment Systems\Project\Project\7 Project lms (WEB)\Books\Khaak aur Khoon.pdf"> <button class="digital_btn" style="margin-left: 78px;"> Read Online </button> </a>
		<button class="digital_btn"> Download </button>
		<a target="_blank" href="D:\PUCIT\Semester III\Subjects\Database Managment Systems\Project\Project\7 Project lms (WEB)\Books\dastan-iman-faroshon-ki 1.pdf"> <button class="digital_btn" style="margin-left: 75px;"> Read Online </button> </a>
		<button class="digital_btn"> Download </button>

		<br><br>
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
			<div class="side_bar_text"> <a href="Digital library.php"> Digital Library </a> </div>
			<br> <hr class="hr_style">
			<div> <img class="side_bar_pic" src="nArrival.jpg"> </div>
			<div class="side_bar_text"> <a target="_blank" href="Arrival.php"> New Arrivals </a> </div>
			<br>
		</div>
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