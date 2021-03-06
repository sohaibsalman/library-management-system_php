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
		<title> Shaheen Library Management </title>
		<link rel="stylesheet" type="text/css" href="homeCSS.css">
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
		<div> <img id="home_page_pic" src="read.jpg"> </div>
	</div>
	
	<div id="shade" class="headerPosition"></div>

<!-- Start of Navigational Bar (Menu) -->

<?php

$notification = 0;

?>

	<div  id="menu_div">
		<div  id="menu_div2">
		<nav>
			<a id="student_this_page" href="Home.php" class="menu"> Home </a>
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

<!-- Start of Slider -->

<div id="container">
	<!-- Class slides is for javascript -->
	<img alt="Biography" class="slides" src="biography.jpg">
	<img alt="Novel" class="slides" src="novel.jpg">    
	<img alt="Computer Science" class="slides" src="computer.jpg">
	<img alt="History" class="slides" src="history.jpg">
	<img alt="Science" class="slides" src="science.jpg">
	<button class = "slider_btn" onclick = "plusIndex(-1)" id="btn1"> &#10094;</button>
	<button class = "slider_btn" onclick = "plusIndex(1)" id="btn2"> &#10095;</button>
</div>

<!-- Start of Message of The Secretary Board of Governers -->

<br><br><br>
<div class="display_style" id="box_layout"> 

 		<h2> Message by The Secretary Board of Governers </h2>

		<br> <p style="font-style: italic; font-size: 18px;">Libraries have always played an important role in the development of nations. If we go through the history of prosperous and 	developed countries then we shall come to know that they have achieved their goals by developing and promoting culture of libraries. Libraries are the huge 	source 	of knowledge by which a person can get an enlightening improvement and can performs a progressive role for the success of nation.</p>
    	<br> <p style="font-style: italic;  font-size: 18px">According to me all citizen of Pakistan should gain benefits by using libraries, so that they can increase their knowledge with leads them to become highly literate persons. With all this treasure of information and by doing hard work we can take our beloved country Pakistan up to the peak level of success. For this I always put up my best efforts to promote and develop libraries in Pakistan. I am very hopeful that by the grace of Almighty Allah the time is near when we all will proudly say that Pakistan is the best developed country on all over the globe..</p> 

	   
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




<script>
 var index = 1;

 function plusIndex(n)
 {
  index = index + 1;
  showImage(index);
 }

 showImage(1);

 function showImage(n)
 {
    var i;
    var x = document.getElementsByClassName("slides");
    if(n > x.length)
    {
      index = 1;
    }
    if(n < 1)
    {
      index = x.length;
    }
    for(i = 0; i < x.length; i++)
    {
      x[i].style.display = "none";
    }
    x[index-1].style.display = "block";
  }

  autoSLide();
  function autoSLide()
  {
    var i;
    var x = document.getElementsByClassName("slides");

    for(i = 0; i < x.length; i++)
    {
      x[i].style.display = "none";
    }

    if(index > x.length)
    {
      index = 1;
    }
    x[index-1].style.display = "block";
    index++;
    setTimeout(autoSLide, 2000);
  }

</script>
</html>