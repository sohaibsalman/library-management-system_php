<?php session_start(); ?>
<?php 
$count = 0;
$roll = $_SESSION["student_id"];
$connection = mysqli_connect("localhost","root","","lms");
$res = mysqli_query($connection, " SELECT * FROM issued_books WHERE studentrollnumber =  '$roll' AND returnstatus='no'");
$count = mysqli_num_rows($res);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Collections</title>
		<link rel="stylesheet" type="text/css" href="homeCSS.css">
		<link rel="stylesheet" type="text/css" href="collectionsCSS.css">
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
		<div> <img id="home_page_pic" alt="Collections" src="collections.jpg"> </div>
	</div>
	
	<div id="shade" class="headerPosition"></div>

<!-- Start of Navigational Bar (Menu) -->

	<div  id="menu_div">
		<div  id="menu_div2">
		<nav>
			<a href="Home.php" class="menu"> Home </a>
			<span class="bar"> |</span>
			<a id="student_this_page" href="Collections.php" class="menu"> Collections </a>
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


<br><br><br>
<div style="height: 1950px;" class="display_style" id="box_layout"> 
		<br><br>
 		<center><h1> Shaheen Library Collection </h1></center>

 		<br><br><br><br>
 			<br> 
			<img class="collections_pic" src="engShelf.jpg" alt="EUROPEAN LANGUAGES COLLECTION">
				
			<div class="collections_text"> <h2><u> EUROPEAN LANGUAGES COLLECTION </u></h2>
				<p> This collection has all borrow able material of European language. All this collection is located at the Ground Floor of the Library.</p>
			</div>

 		<br><br><br><br><br><br>
 			<br> 
			<img class="collections_pic" src="oriShelf.jpg" alt="ORIENTAL  LANGUAGES COLLECTION">
				
			<div class="collections_text"> <h2><u> ORIENTAL  LANGUAGES COLLECTION </u></h2>
				<p> This collection has all borrow able material of Oriental language. All this collection is located at the First Floor of the Library. The collection in this section is more than two hundred thousand books approx.</p>
			</div>

 		<br><br><br><br><br>
		<br> 
			<img class="collections_pic" src="refShelf.jpg" alt="REFERENCE COLLECTION">
			<div class="collections_text"> <h2><u> REFERENCE COLLECTION </u></h2>
				<p> Reference collection as self descriptive is only for reference use, this may not be borrowed. This collection is in an Air conditioned hall located at the Ground Floor of the Library. The reference collection has many valuable sources like, encyclopedia Britannica, Encyclopedia Americana, Chemical Abstracts, Encyclopedia of Social Sciences, Encyclopedia of Seerat, Encyclopedia of Library and Information Science, Statesman Year book etc.</p>
			</div>

 		<br><br>
		<br> 
			<img class="collections_pic" src="thesisShelf.jpg" alt="THESES COLLECTION">
				
			<div class="collections_text"> <h2><u> THESES COLLECTION </u></h2>
				<p> Shaheen Library is a depositary library of Thesis. The lists of theses submitted in the library for PhD degrees available at library.</p>
			</div>

 		<br><br><br><br><br><br>
		<br> 
			<img class="collections_pic" src="chinesShelf.jpg" alt="CHINESES COLLECTION">
				
			<div class="collections_text"> <h2><u> CHINESES COLLECTION </u></h2>
				<p> Besides other collections, library has a gifted collection from China, the books in this collection are about China both in English and Chinese languages. The collection is placed at the ground floor of the library in General Collection. But the books of this collection are not issued.</p>
			</div>

 		<br><br><br><br>
 			<br> 
			<img class="collections_pic" src="unoShelf.jpg" alt="REPORTS COLLECTION">
				
			<div class="collections_text"> <h2><u> REPORTS COLLECTION </u></h2>
				<p> Besides other collections, Shaheen Library has United Nations, Pre-partition Indian government reports, imperial gazettes of India and Pakistan government and reports. We have United Nations publications and Indian and Pakistan government reports.</p>
			</div>

 		<br><br><br><br>
 			<br> 
			<img class="collections_pic" src="CD.jpg" alt="CDs/DVDs COLLECTION">
				
			<div class="collections_text"> <h2><u> CDs/DVDs COLLECTION </u></h2>
				<p> Library has a collection of CDs/DVDs. These CDs are as accompanying material along with foreign purchased books. Students can read and write this material free of charges. Most of the CD collection is related to science subjects, however CDs related to IELTS, TOEFL, GRE and English dictionaries etc. are also available. Metadata of this CDs/DVDs collection is available into digital library catalogue.</p>
			</div>

 		<br><br><br><br>
 			<br> 
			<img class="collections_pic" src="digital.jpg" alt="DIGITALIZED COLLECTION">
				
			<div class="collections_text"> <h2><u> DIGITALIZED COLLECTION </u></h2>
				<p> Library holds manuscripts, newspapers, rare items and other documents of historical importance in its collection. These items need to be preserved for future use and to fulfill the research needs of researchers in country or from abroad. In all this process, intellectual property and copyright laws are keenly observed. Metadata of this digitized collection is available into digital library catalogue.</p>
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