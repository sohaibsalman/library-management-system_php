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
	<title>Contact Us</title>
		<link rel="stylesheet" type="text/css" href="homeCSS.css">
		<link rel="stylesheet" type="text/css" href="contactCSS.css">
	<link rel="stylesheet" type="text/css" href="loginCSS.css">
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
		<div> <img id="home_page_pic" alt="Contact Us" src="contact_us.jpg"> </div>
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
			<a id="student_this_page" href="Contact Us.php" class="menu"> CONTACT US </a>
			<span class="bar"> |</span>
			<a href="login.php" class="menu"> Sign out </a>
        </nav>
        </div>
    </div>

    <!-- Box -->
    <div class="display_style" id="box_layout"> 
 		<h2> <center> Contact Us </center></h2>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <p>Your enquiry will be sent to our information team. This enquiry service also has access to the expertise of the many other qualified librarians in the library to ensure you are given the best possible advice.</p>
		<p>Whilst we shall endeavour to answer your enquiry we cannot guarantee a detailed response in every case.</p>
	   
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
			<div class="side_bar_text"> <a target="_blank" href="Digital library.php"> Digital Library </a> </div>
			<br> <hr class="hr_style">
			<div> <img class="side_bar_pic" src="nArrival.jpg"> </div>
			<div class="side_bar_text"> <a target="_blank" href="Arrival.php"> New Arrivals </a> </div>
			<br>
		</div>
	</div>

	<!-- Start of Form -->
<div id="form_small_div" style="margin-left: 180px; margin-top: 60px; height: 550px;">
	<table id="form_small_field">
 		 <tr>
 			<td> <img id="login_pic" src="login.png"> </td>
		</tr>
  		<tr>
 			<td> <input class="input" type="text" placeholder="  First Name"/> </td>
 		</tr>
  		<tr>
 			<td> <input class="input" type="text" placeholder="  Last Name"/> </td>
 		</tr>
  		<tr>
 			<td> <input class="input" type="text" placeholder="  Student ID"/> </td>
 		</tr>
  		<tr>
 			<td> <input class="input" type="text" placeholder="  E-mail"/> </td>
 		</tr>
  		<tr>
 			<td class="heading"> Message </td>
 		</tr>
  		<tr>
 			<td> <textarea placeholder="E-mail" cols="35" rows="6" style = "border-radius:7px"> </textarea><br> </td>
 		</tr>
  		<tr>
 			<td> <input id="btn_style" type="submit" onclick="" value="Submit"/> <input id="btn_style" type="reset" value="Reset Values">  </td>
 		</tr>
	</table>
</div>

<!-- Start of Footer -->

<div id="footer" style="margin-top:-80px">
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