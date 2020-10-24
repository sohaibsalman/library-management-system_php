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
	<title> Online Catalog </title>
		<link rel="stylesheet" type="text/css" href="homeCSS.css">
		<link rel="stylesheet" type="text/css" href="catalogCSS.css">
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
		<div> <img id="home_page_pic" alt="Online Catalog" src="online-catalog.jpg"> </div>
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

 		<h1><center> Search Book </center></h1>


		<br> <p> The online caltalog helps you to explore the collection of Shaheen Library according to Book name, Book ID, Author and Category.</p>
	   <br><br><br>
	<br><br>
	</div>
<!-- Start of Side bar (box) -->

	<div class="display_style" id="side_bar_border">
		<h1 id="quick_inks"> Quick Links </h1>
		<div id="side_bar">
			<div> <img class="side_bar_pic" src="nOpac.jpg"> </div>
			<div class="side_bar_text"> <a href="Online Catalog.php"> Online Catalog </a> </div>
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
	<div id="search_book_div" style="margin-left: 110px;"></div>

	<div id="search_book_form" style="margin-left: 200px;">
		 <form method="post">
		 <table>
			<tr>
				<td>
					<img id="search_icon" src="search.png">
				</td>
 				<td >
 					<select id="select_large" name="search_by" style="margin-left: 40px;">
 						<option hidden=""> Search By </option>
 						<option> Book Name </option>
 						<option> Book ID </option>
 						<option> Author </option>
 						<option> Category </option>
 					</select>
 				</td>
 				<td >
 					<input type="search" placeholder=" Search ..." id="search_bar" name="search" required="">
				 <button type="submit" name="find">Search</button>
 				</td>
		 	</tr>
		</table>
		</form>
	</div>
<!-- Start of PHP -->

<?php
	if(isset($_POST['find']))
	{
		$connection=mysqli_connect('localhost','root','','lms');
		$query;
		if($connection)
		{
			$searchBy = $_POST["search_by"];
			if($searchBy == "Book Name")
			{
				$serial = 1;
				$bookName = $_POST["search"];
				$query = "SELECT * FROM book WHERE name = '$bookName'";
				$result = mysqli_query($connection, $query);
				if($result)
				{
				?>
				<br><br><br><br>
				<h2><center>Searched Book(s)</center></h2>	
				<?php
				echo "<table id='lms_table'>";
				echo "<tr>";
				echo "<th>"; echo "Sr. #"; echo "</th>";
				echo "<th>"; echo "Book ID"; echo "</th>";
				echo "<th>"; echo "Book Name"; echo "</th>";
				echo "<th>"; echo "Author's Name"; echo "</th>";
				echo "<th>"; echo "Book Edition"; echo "</th>";
				echo "<th>"; echo "Category"; echo "</th>";
				echo "<th>"; echo "Availability"; echo "</th>";
				echo"</tr>";

				while($row = mysqli_fetch_array($result))
				{
					echo "<tr>";
					echo "<td>"; echo $serial; echo "</td>";
					echo "<td>"; echo $row["id"]; echo "</td>";
					echo "<td>"; echo $row["name"]; echo "</td>";
					echo "<td>"; echo $row["author"]; echo "</td>";
					echo "<td>"; echo $row["edition"]; echo "</td>";
					echo "<td>"; echo $row["category"]; echo "</td>";
					echo "<td>"; echo $row["status"]; echo "</td>";
					echo "</tr>";
					$serial++;
				}
				echo"</table>";
					}
				}
				else if($searchBy=="Book ID")
				{
					$serial = 1;
					$bookID = $_POST["search"];
					$query = "SELECT * FROM book WHERE id = '$bookID'";
					$result = mysqli_query($connection, $query);
					if($result)
					{
					?>
					<br><br><br><br>	
					<h2><center>Searched Book(s)</center></h2>	
					<?php
					echo "<table id='lms_table'>";
					echo "<tr>";
					echo "<th>"; echo "Sr. #"; echo "</th>";
					echo "<th>"; echo "Book ID"; echo "</th>";
					echo "<th>"; echo "Book Name"; echo "</th>";
					echo "<th>"; echo "Author's Name"; echo "</th>";
					echo "<th>"; echo "Book Edition"; echo "</th>";
					echo "<th>"; echo "Category"; echo "</th>";
					echo "<th>"; echo "Availability"; echo "</th>";
					echo"</tr>";

					while($row = mysqli_fetch_array($result))
					{
						echo "<tr>";
						echo "<td>"; echo $serial; echo "</td>";
						echo "<td>"; echo $row["id"]; echo "</td>";
						echo "<td>"; echo $row["name"]; echo "</td>";
						echo "<td>"; echo $row["author"]; echo "</td>";
						echo "<td>"; echo $row["edition"]; echo "</td>";
						echo "<td>"; echo $row["category"]; echo "</td>";
						echo "<td>"; echo $row["status"]; echo "</td>";
						echo "</tr>";
						$serial++;
					}
					echo"</table>";
						}
				}
				else if($searchBy=="Author")
				{
					$serial = 1;
					$bookAuthor = $_POST["search"];
					$query = "SELECT * FROM book WHERE author = '$bookAuthor'";
					$result = mysqli_query($connection, $query);
					if($result)
					{
					?>
					<br><br><br><br>	
					<h2><center>Searched Book(s)</center></h2>	
					<?php
					echo "<table id='lms_table'>";
					echo "<tr>";
					echo "<th>"; echo "Sr. #"; echo "</th>";
					echo "<th>"; echo "Book ID"; echo "</th>";
					echo "<th>"; echo "Book Name"; echo "</th>";
					echo "<th>"; echo "Author's Name"; echo "</th>";
					echo "<th>"; echo "Book Edition"; echo "</th>";
					echo "<th>"; echo "Category"; echo "</th>";
					echo "<th>"; echo "Availability"; echo "</th>";
					echo"</tr>";

					while($row = mysqli_fetch_array($result))
					{
						echo "<tr>";
						echo "<td>"; echo $serial; echo "</td>";
						echo "<td>"; echo $row["id"]; echo "</td>";
						echo "<td>"; echo $row["name"]; echo "</td>";
						echo "<td>"; echo $row["author"]; echo "</td>";
						echo "<td>"; echo $row["edition"]; echo "</td>";
						echo "<td>"; echo $row["category"]; echo "</td>";
						echo "<td>"; echo $row["status"]; echo "</td>";
						echo "</tr>";
						$serial++;
					}
					echo"</table>";
						}
				}
				else if($searchBy=="Category")
				{
					$serial = 1;
					$category = $_POST["search"];
					$query = "SELECT * FROM book WHERE category = '$category'";
					$result = mysqli_query($connection, $query);
					if($result)
					{
					?>
					<br><br><br><br>	
					<h2><center>Searched Book(s)</center></h2>	
					<?php
					echo "<table id='lms_table'>";
					echo "<tr>";
					echo "<th>"; echo "Sr. #"; echo "</th>";
					echo "<th>"; echo "Book ID"; echo "</th>";
					echo "<th>"; echo "Book Name"; echo "</th>";
					echo "<th>"; echo "Author's Name"; echo "</th>";
					echo "<th>"; echo "Book Edition"; echo "</th>";
					echo "<th>"; echo "Category"; echo "</th>";
					echo "<th>"; echo "Availability"; echo "</th>";
					echo"</tr>";

					while($row = mysqli_fetch_array($result))
					{
						echo "<tr>";
						echo "<td>"; echo $serial; echo "</td>";
						echo "<td>"; echo $row["id"]; echo "</td>";
						echo "<td>"; echo $row["name"]; echo "</td>";
						echo "<td>"; echo $row["author"]; echo "</td>";
						echo "<td>"; echo $row["edition"]; echo "</td>";
						echo "<td>"; echo $row["category"]; echo "</td>";
						echo "<td>"; echo $row["status"]; echo "</td>";
						echo "</tr>";
						$serial++;
					}
					echo"</table>";
						}
				}
		}
	}
?>


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