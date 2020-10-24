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
	<title>Services</title>
		<link rel="stylesheet" type="text/css" href="homeCSS.css">
		<link rel="stylesheet" type="text/css" href="servicesCSS.css">
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
		<div> <img id="home_page_pic" alt="Services" src="services.png"> </div>
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
			<a id="student_this_page" href="Services.php" class="menu"> Services </a>
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
<div style="" class="display_style" id="box_layout"> 

		<br><br>
 		<h2> Computer Lab </h2>

		 <p>A Computer Lab comprising of 50 latest computers is providing internet, e-mail, educational downloads, HEC digital resources and other information to the members of Library. All services including usage of computer and internet are free of cost. The computer lab has been serving as a resource center for reference materials to scholars, researchers and graduate students of colleges & Universities all over the country.</p> 

		<br> <hr class="hr_style">
		<br><br>
		
 		<h2> Printing and Photocopy </h2>

		 <p>Printing and Photocopy facility is available in Computer lab. However, the members have to pay nominal charges to avail these services. Print outs can be obtained by paying Rs.5/- per page. The Photocopy charges are charged on subsidized rates.</p> 

		<br> <hr class="hr_style">
		<br><br>
		
 		<h2> Cafeteria </h2>

		 <p>Near the main entrance of the library there is a cafeteria. The cafeteria serves the members as well as the library staff on demand. The members who stay long time in the library this is a blessing for them to just eat and study.</p> 

		<br> <hr class="hr_style">
		<br><br>
		
 		<h2> Complete List of Newspapers </h2>

		 <p>Shaheen Library is spending a lot of on maintaining a huge collection of Newspapers for its memebers and readers. A complete list of Urdu and English papers is as follows.</p> 
		
		        	<table id="Newspapers">
		        	<tr>
		        		<td>
		        			<table class="table">
		        		<thead>
		        		<tr>
		        			<td colspan="3" align="center"><p><u>Urdu Newspapers</u></p></td>
		        		</tr>
		        		<tr>
		        			<th id="table_1_col_1">Sr. No.</th>
		        			<th id="table_1_col_2">Title of Newspaper</th>
		        			<th id="table_1_col_3">No. of Copies</th>
		        		</tr>
		        		</thead>
		        		<tr>
		        			<td>1</td>
		        			<td>Abtak</td>
		        			<td>2</td>
		        		</tr>

		        		<tr>
		        			<td>2</td>
		        			<td>Aosaf</td>
		        			<td>1</td>
		        		</tr>

		        		<tr>
		        			<td>3</td>
		        			<td>Asas</td>
		        			<td>1</td>
		        		</tr>

		        		<tr>
		        			<td>4</td>
		        			<td>City42</td>
		        			<td>3</td>
		        		</tr>

		        		<tr>
		        			<td>5</td>
		        			<td>Din</td>
		        			<td>1</td>
		        		</tr>

		        		<tr>
		        			<td>6</td>
		        			<td>Dunya</td>
		        			<td>2</td>
		        		</tr>

		        		<tr>
		        			<td>7</td>
		        			<td>Daily Hareef</td>
		        			<td>1</td>
		        		</tr>

		        		<tr>
		        			<td>8</td>
		        			<td>Daily Inquilab</td>
		        			<td>1</td>
		        		</tr>

		        		<tr>
		        			<td>9</td>
		        			<td>Daily Mashriq</td>
		        			<td>1</td>
		        		</tr>

		        		<tr>
		        			<td>10</td>
		        			<td>Daily Sahafat</td>
		        			<td>1</td>
		        		</tr>

		        		<tr>
		        			<td>11</td>
		        			<td>Daily Sharq</td>
		        			<td>1</td>
		        		</tr>

		        		<tr>
		        			<td>12</td>
		        			<td>Express</td>
		        			<td>3</td>
		        		</tr>

		        		<tr>
		        			<td>13</td>
		        			<td>Insaaf</td>
		        			<td>1</td>
		        		</tr>

		        		<tr>
		        			<td>14</td>
		        			<td>Jahan-e-Pak</td>
		        			<td>1</td>
		        		</tr>

		        		<tr>
		        			<td>15</td>
		        			<td>Jasarat</td>
		        			<td>1</td>
		        		</tr>

		        		<tr>
		        			<td>16</td>
		        			<td>Jinnah</td>
		        			<td>1</td>
		        		</tr>

		        		<tr>
		        			<td>17</td>
		        			<td>Jung</td>
		        			<td>6</td>
		        		</tr>

		        		<tr>
		        			<td>18</td>
		        			<td>Jurat</td>
		        			<td>1</td>
		        		</tr>

		        		<tr>
		        			<td>19</td>
		        			<td>Khabrain </td>
		        			<td>4</td>
		        		</tr>

		        		<tr>
		        			<td>20</td>
		        			<td>Maswat</td>
		        			<td>1</td>
		        		</tr>

		        		<tr>
		        			<td>21</td>
		        			<td>Nai baat</td>
		        			<td>2</td>
		        		</tr>

		        		<tr>
		        			<td>22</td>
		        			<td>Nawa-i-Waqt</td>
		        			<td>5</td>
		        		</tr>

		        		<tr>
		        			<td>23</td>
		        			<td>Pakistan</td>
		        			<td>2</td>
		        		</tr>

		        		<tr>
		        			<td>24</td>
		        			<td>Pakistan (Pindi)</td>
		        			<td>1</td>
		        		</tr>

		        		<tr>
		        			<td>25</td>
		        			<td>Sehar</td>
		        			<td>1</td>
		        		</tr>

		        		<tr>
		        			<td>26</td>
		        			<td>Smaa</td>
		        			<td>1</td>
		        		</tr>

		        		<tr>
		        			<td>27</td>
		        			<td>Sarzameen</td>
		        			<td>1</td>
		        		</tr>

		        		<tr>
		        			<td>28</td>
		        			<td>Tajaarat</td>
		        			<td>1</td>
		        		</tr>

		        		<tr>
		        			<td>29</td>
		        			<td>Taqat</td>
		        			<td>1</td>
		        		</tr>

		        		<tr>
		        			<td>30</td>
		        			<td>Waqt</td>
		        			<td>1</td>
		        		</tr>

		        		<tr>
		        			<td>31</td>
		        			<td>Ummat</td>
		        			<td>1</td>
		        		</tr>

		        	</table>
		        		</td>
		        		<td>
		        			<table class="table" id="table_2_style">
		        		<thead>
		        		<tr>
		        			<td colspan="3" align="center"><p><u>English Newspapers</u></p></td>
		        		</tr>
		        		<tr>
		        			<th id="table_2_col_1">Sr. No.</th>
		        			<th id="table_2_col_2">Title of Newspaper</th>
		        			<th id="table_2_col_3">No. of Copies</th>
		        		</tr>
		        		</thead>
		        		<tr>
		        			<td>1</td>
		        			<td>Business Recorder</td>
		        			<td>1</td>
		        		</tr>

		        		<tr>
		        			<td>2</td>
		        			<td>Cutting Edge</td>
		        			<td>2</td>
		        		</tr>

		        		<tr>
		        			<td>3</td>
		        			<td>Daily Times</td>
		        			<td>3</td>
		        		</tr>

		        		<tr>
		        			<td>4</td>
		        			<td>Dawn</td>
		        			<td>9</td>
		        		</tr>

		        		<tr>
		        			<td>5</td>
		        			<td>Express Tribune</td>
		        			<td>2</td>
		        		</tr>

		        		<tr>
		        			<td>6</td>
		        			<td>Friday Times</td>
		        			<td>5</td>
		        		</tr>

		        		<tr>
		        			<td>7</td>
		        			<td>Frontier Post</td>
		        			<td>2</td>
		        		</tr>

		        		<tr>
		        			<td>8</td>
		        			<td>Nation</td>
		        			<td>3</td>
		        		</tr>

		        		<tr>
		        			<td>9</td>
		        			<td>Lahore Chronicle</td>
		        			<td>5</td>
		        		</tr>

		        		<tr>
		        			<td>10</td>
		        			<td>Pakistan Observer</td>
		        			<td>1</td>
		        		</tr>

		        		<tr>
		        			<td>11</td>
		        			<td>Pakistan Today</td>
		        			<td>1</td>
		        		</tr>

		        		<tr>
		        			<td>12</td>
		        			<td>The Business</td>
		        			<td>1</td>
		        		</tr>

		        		<tr>
		        			<td>13</td>
		        			<td>The Educationist</td>
		        			<td>1</td>
		        		</tr>

		        		<tr>
		        			<td>14</td>
		        			<td>The News</td>
		        			<td>5</td>
		        		</tr>

		        	</table>
		        		</td>
		        	</tr>
		        	</tbody></table>
		<br> <hr class="hr_style">
		<br><br>
		
 		<h2> Request for a Book </h2>

		 <p>Members can request for books if it is not available in the library. They just need to get a form from acquisition section and after filling it give it to acquisition in charge.</p> 

		<br> <hr class="hr_style">
		<br><br>
		
 		<h2> Praying Place </h2>

		 <p>A separate place in is reserved as a praying place.</p> 

		<br> <hr class="hr_style">
		<br><br>
		
 		<h2> Security Measures </h2>

		 <p>Two Security Officers have been employed for checking entry passes, looking after the visitors, preventing losses, thefts and pilferage. They will also act as Fire Prevention Officers. Moreover, Security Cameras are also installed within and around the library building.</p> 

		<br><br><br>
		
	</div>

<!-- Start of Side bar (box) -->

	<div class="display_style" id="side_bar_border">
		<h1 id="quick_inks"> Quick Links </h1>
		<div id="side_bar">
			<div> <img class="side_bar_pic" src="nOpac.jpg"> </div>
			<div class="side_bar_text"> <a target="_blank" href="Online Catalog.php"> Online Catalog </a> </div>
			<br> <hr class="hr_style" style="margin-top: 10px;">
			<div> <img class="side_bar_pic" src="nMenu.jpg"> </div>
			<div class="side_bar_text"> <a target="_blank" href="Manuscript.php"> Manuscripts </a> </div>
			<br> <hr class="hr_style" style="margin-top: 10px;">
			<div> <img class="side_bar_pic" src="caligraphy.jpg"> </div>
			<div class="side_bar_text"> <a target="_blank" href="Caligraphy.php"> Caligraphy </a> </div>
			<br> <hr class="hr_style" style="margin-top: 10px;">
			<div> <img class="side_bar_pic" src="pdfLibrary.jpg"> </div>
			<div class="side_bar_text"> <a target="_blank" href="Digital library.php"> Digital Library </a> </div>
			<br> <hr class="hr_style" style="margin-top: 10px;">
			<div> <img class="side_bar_pic" src="nArrival.jpg"> </div>
			<div class="side_bar_text" style="margin-top: 10px;"> <a target="_blank" href="Arrival.php"> New Arrivals </a> </div>
			<br>
		</div>
	</div>

<!-- Start of Footer -->

<div id="footer">
	<table style="color: white;" id="footer_table">
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