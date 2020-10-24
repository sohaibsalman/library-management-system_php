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
	<title> Issue Book </title>
		<link rel="stylesheet" type="text/css" href="homeCSS.css">
		<link rel="stylesheet" type="text/css" href="issueCSS.css">
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
		<div> <img id="home_page_pic" alt="Issue Book" src="issue-book.jpg"> </div>
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
			<a id="student_this_page" href="Issue Book.php" class="menu"> Issue Book </a>
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
    <div class="display_style" id="box_layout"> 
 		<h2> <center> Issue Book Rules </center></h2>

		<br> <p> Students can issue a book from library for academic purpose or for reading. Rules for issue book are given below: </p>
		<ul type="circle">
			<li> A student can issue upto 3 books at a time. </li>
			<li> Book should be return within 2 weaks other wise Rs. 10/- will be cahrged for each day. </li>
			<li> In case of any damage Rs. 1000/- will be charged as fine. </li>
			<li> To re-issue any book you have to return book for one day. </li>
            <li> A fine of Rs. 500 will be charged if a student writes anyting on the book.</li>

		</ul>
	   
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
<div id="request_book_div" style="margin-left: 110px; height: 330px"></div>

<div id="request_book_form" style="margin-left: 200px; margin-top: -330px;">
	<h1 style="color: white;"> Request a Book </h1>  
	<form method="post" action="issue book.php">
		 <table>
			<tr>
 				<td> <input class="input" type="text" placeholder="  Student ID" required="" name="rollnumber" /> 
		  		<input class="input" type="text" placeholder="  Student Name"/ required="" name="fullname"> </td>
	 		</tr>
			<tr>
 				<td> <input class="input" type="text" placeholder="  Book ID" required="" name="bookid" / > 
		  		<input class="input" type="text" placeholder="  Book Name" required="" name="bookname" /> </td>
	 		</tr>
			<tr>
				<td class="heading">Date of Issue <td>
			</tr>
	 		<tr>
		 		<td>
					<select class="select_small">
						<option>Day</ption>
						<option>1</ption>
						<option>2</ption>
						<option>3</ption>
						<option>4</ption>
						<option>5</ption>
						<option>6</ption>
						<option>7</ption>
						<option>8</ption>
						<option>9</ption>
						<option>10</ption>
						<option>11</ption>
						<option>12</ption>
						<option>13</ption>
						<option>14</ption>
						<option>15</ption>
						<option>16</ption>
						<option>17</ption>
						<option>18</ption>
						<option>19</ption>
						<option>20</ption>
						<option>21</ption>
						<option>22</ption>
						<option>23</ption>
						<option>24</ption>
						<option>25</ption>
						<option>26</ption>
						<option>27</ption>
						<option>28</ption>
						<option>29</ption>
						<option>30</ption>
						<option>31</ption>
					</select>
					<select class="select_small">
						<option>Month</ption>
						<option>January</ption>
						<option>February</ption>
						<option>March</ption>
						<option>Aprit</ption>
						<option>May</ption>
						<option>June</ption>
						<option>July</ption>
						<option>August</ption>
						<option>September</ption>
						<option>October</ption>
						<option>November</ption>
						<option>December</ption>
					</select>
		 			<select class="select_small">
						<option>Year</ption>
						<option>1950</ption>
						<option>1951</ption>
						<option>1952</ption>
						<option>1953</ption>
						<option>1954</ption>
						<option>1955</ption>
						<option>1956</ption>
						<option>1957</ption>
						<option>1958</ption>
						<option>1959</ption>			
						<option>1960</ption>
						<option>1961</ption>
						<option>1962</ption>
						<option>1963</ption>
						<option>1964</ption>
						<option>1965</ption>
						<option>1966</ption>
						<option>1967</ption>
						<option>1968</ption>
						<option>1969</ption>
						<option>1970</ption>
						<option>1971</ption>
						<option>1972</ption>
						<option>1973</ption>
						<option>1974</ption>
						<option>1975</ption>
						<option>1976</ption>
						<option>1977</ption>
						<option>1978</ption>
						<option>1979</ption>
						<option>1981</ption>
						<option>1982</ption>
						<option>1983</ption>
						<option>1984</ption>
						<option>1985</ption>
						<option>1986</ption>
						<option>1987</ption>
						<option>1988</ption>
						<option>1989</ption>
						<option>1990</ption>
						<option>1991</ption>
						<option>1992</ption>
						<option>1993</ption>
						<option>1994</ption>
						<option>1995</ption>
						<option>1996</ption>
						<option>1997</ption>
						<option>1998</ption>
						<option>1999</ption>
						<option>2001</ption>
						<option>2002</ption>
						<option>2003</ption>
						<option>2004</ption>
						<option>2005</ption>
						<option>2006</ption>
						<option>2007</ption>
						<option>2008</ption>
						<option>2009</ption>
						<option>2010</ption>
						<option>2011</ption>
						<option>2012</ption>
						<option>2013</ption>
						<option>2014</ption>
						<option>2015</ption>
						<option>2016</ption>
						<option>2017</ption>
						<option>2018</ption>
					</select>			
				</td>	
				<td>
					
				<td>
					<select id="select_large" name="departement" style="margin-left: -310px; ">
						<option> Department </option>
						<option> Botany </option>
						<option> Business & Commerce </option>
						<option> Chemistry </option>
						<option> Engineering </option>
						<option> Mathematics </option>
						<option> Medical </option>
						<option> Information Technology </option>
						<option> Physics </option>
						<option> Space & Cosmology </option>
						<option> Zoology </option>
					</select>
				</td>
				</td>		
			</tr>
			<td>
				 <button type="submit" name="request">Request</button>
			</td>
		</table>
 	</form>
</div>

<!-- Start Issue Book Verification -->

<?php
	if(isset($_POST["request"]))
	{
		$connection=mysqli_connect("localhost","root","","lms");
		if($connection)
		{
			$bookid=$_POST['bookid'];
			$rollnumber=$_POST['rollnumber'];
			$BookCount = 0;
			$StudentCount = 0;
			$bookStatusQuery = mysqli_query($connection, " SELECT * FROM book WHERE id = '$bookid' ");
			while($row = mysqli_fetch_array($bookStatusQuery))
				$bookStatus=$row["status"];
			$verifyBookId = "SELECT * FROM book WHERE id = '$bookid'";
			$verifyStudentId = "SELECT * FROM student where rollnumber = '$rollnumber' ";
			$BookIdResult = mysqli_query($connection, $verifyBookId);
			$StudentIdResult = mysqli_query($connection, $verifyStudentId);
			$BookCount = mysqli_num_rows($BookIdResult);
			$StudentCount = mysqli_num_rows($StudentIdResult);
			if($BookCount==0)
			{
				?>
				<div id="error_message_div">		
				<p class="error_message"><strong>Invalid</strong> Book ID<p>
				</div>	
				<?php
			}
			else if($StudentCount==0)
			{
				?>
				<div id="error_message_div">		
				<p class="error_message"><strong>Invalid</strong> Student ID<p>
				</div>	
				<?php			}
			else if($bookStatus=="no")
			{
				?>
				<div id="error_message_div">		
				<p class="error_message">Book <strong>Not Available</strong> <p>
				</div>	
				<?php			}
			else
			{
				$fullname=$_POST['fullname'];
				$bookname=$_POST['bookname'];
				$departement=$_POST['departement'];
				$query="INSERT INTO issue_book_request(rollnumber,fullname,bookid,bookname,departement,status) 
						VALUES('$rollnumber','$fullname','$bookid','$bookname','$departement','no')";
				$result = mysqli_query($connection, $query);
				if($result)
				{
					?>
					<script type="text/javascript">
					alert("Request Sent!");
					window.loaction = "issue book.php"
					</script>

					<?php
					$res = mysqli_query($connection, " SELECT * FROM student where rollnumber = '$rollnumber'");
					while($row = mysqli_fetch_array($res))
					{
						$section = $row["section"];
					}
					$res = mysqli_query($connection, " SELECT * FROM book where id = '$bookid'");
					while($row = mysqli_fetch_array($res))
					{
						$author = $row["author"];
						$edition = $row["edition"];
						
					}
					$issuedBooks = "INSERT INTO issued_books VALUES ('$bookid','$bookname','$author','$edition','$rollnumber','$fullname','$section','$departement','','no','','no','0')";
					mysqli_query($connection, $issuedBooks);
					$issueHistory = "INSERT INTO issued_history VALUES ('$bookid','$bookname','$author','$edition','$rollnumber','$fullname','$section','$departement','','no','no','','0')";
					mysqli_query($connection, $issueHistory);

				}

			}
		}
	}
?>

<!-- End of Issue Book Verification -->



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