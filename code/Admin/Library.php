<!DOCTYPE html>
<html lang="en">
<head>
	<title> Library </title>
		<link rel="stylesheet" type="text/css" href="adminCSS.css">
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


<!-- Start of Navigational Bar (Menu) -->

	<div id="menu_div">
		<nav>
		<div id="menu_inner_div">
			<a href="Admin Home.php" class="menu"> Home </a>
			<span class="bar"> |</span>
			<a id="this_page" href="Library.php" class="menu"> Library </a>
			<span class="bar"> |</span>
			<a target="_blank" href="Manage Student.php" class="menu"> Manage Students </a>
			<span class="bar"> |</span>
			<a target="_blank" href="Manage Library.php" class="menu"> Manage Library </a>
			<span class="bar"> |</span>
			<a target="_blank" href="Return Book.php" class="menu"> Return book </a>
			<span class="bar"> |</span>
			<a href="Admin login.php" class="menu"> Sign out </a>
		</div>
        </nav>
    </div>
		
	<br><br><br>

	<br><br><br>

	<br>
    	 <h2 style="color: darkcyan"><center> All Books </center></h2> </th>
	<br>
<?php 

$connection = mysqli_connect("localhost","root","","lms");
if($connection)
{

		$serial = 1;
		$count = 0;
		$query = " SELECT * FROM book" ;
		$result = mysqli_query($connection,$query);
		$count = mysqli_num_rows($result);
		if($count==0)
		{
			?>
			<div id="message_div">
				<p id="message"> No Books Found!</p>
			</div>
			<?php
		}
		else
		{
		echo "<table id='lms_table'>";
		echo "<tr>";
		echo "<th>"; echo "Sr. #"; echo "</th>";
		echo "<th>"; echo "Book ID"; echo "</th>";
		echo "<th>"; echo "Book Name"; echo "</th>";
		echo "<th>"; echo "Author Name"; echo "</th>";
		echo "<th>"; echo "Edition"; echo "</th>";
		echo"</tr>";

		while($row = mysqli_fetch_array($result))
		{
			echo "<tr>";
			echo "<td>"; echo $serial; echo "</td>";
			echo "<td>"; echo $row["id"]; echo "</td>";
			echo "<td>"; echo $row["name"]; echo "</td>";
			echo "<td>"; echo $row["author"]; echo "</td>";
			echo "<td>"; echo $row["edition"]; echo "</td>";
			echo "</tr>";
			$serial++;
		}
		echo"</table>";
	}
	
}

?>

<div id="small_hr" style="margin-top: 40px;margin-left: 300px;"> 
	<hr>
</div>
<br><br><br>
	<!-- Available Books Table -->
	 <h2 style="color: darkcyan"><center> Available Books </center></h2> </th>
	 	<br>

	 	<?php 

$connection = mysqli_connect("localhost","root","","lms");
if($connection)
{

		$serial = 1;
		$count = 0;
		$query = " SELECT * FROM book WHERE status = 'yes' " ;
		$result = mysqli_query($connection,$query);
		$count = mysqli_num_rows($result);
		if($count==0)
		{
			?>
			<div id="message_div">
				<p id="message"> No Books Available!</p>
			</div>
			<?php
		}
		else
		{
		echo "<table id='lms_table'>";
		echo "<tr>";
		echo "<th>"; echo "Sr. #"; echo "</th>";
		echo "<th>"; echo "Book ID"; echo "</th>";
		echo "<th>"; echo "Book Name"; echo "</th>";
		echo "<th>"; echo "Author Name"; echo "</th>";
		echo "<th>"; echo "Edition"; echo "</th>";
		echo"</tr>";

		while($row = mysqli_fetch_array($result))
		{
			echo "<tr>";
			echo "<td>"; echo $serial; echo "</td>";
			echo "<td>"; echo $row["id"]; echo "</td>";
			echo "<td>"; echo $row["name"]; echo "</td>";
			echo "<td>"; echo $row["author"]; echo "</td>";
			echo "<td>"; echo $row["edition"]; echo "</td>";
			echo "</tr>";
			$serial++;
		}
		echo"</table>";
	}
	
}

?>

<div id="small_hr" style="margin-top: 40px; margin-left: 300px;"> 
	<hr>
</div>

<br><br><br>
	<!-- Issued Books Table -->
		<h2 style="color: darkcyan"><center> Currently Issued Books </center></h2> </th>
    		
	<br><br>
<?php 

$connection = mysqli_connect("localhost","root","","lms");
if($connection)
{

		$serial = 1;
		$count = 0;
		$query = " SELECT * FROM issued_books WHERE issuestatus = 'yes'" ;
		$result = mysqli_query($connection,$query);
		$count = mysqli_num_rows($result);
		if($count == 0)
		{
			?>
			<div id="message_div">
				<p id="message"> No Books Issued!</p>
			</div>
			<?php
		}
		else
		{

		echo "<table id='lms_table'>";
		echo "<tr>";
		echo "<th>"; echo "Sr. #"; echo "</th>";
		echo "<th>"; echo "Book ID"; echo "</th>";
		echo "<th>"; echo "Book Name"; echo "</th>";
		echo "<th>"; echo "Author Name"; echo "</th>";
		echo "<th>"; echo "Book Edition"; echo "</th>";
		echo "<th>"; echo "Student Roll #"; echo "</th>";
		echo "<th>"; echo "Student Name"; echo "</th>";
		echo "<th>"; echo "Student Section"; echo "</th>";
		echo "<th>"; echo "Student Departement"; echo "</th>";
		echo "<th>"; echo "Date of Issue"; echo "</th>";
		echo"</tr>";

		while($row = mysqli_fetch_array($result))
		{
			echo "<tr>";
			echo "<td>"; echo $serial; echo "</td>";
			echo "<td>"; echo $row["bookid"]; echo "</td>";
			echo "<td>"; echo $row["bookname"]; echo "</td>";
			echo "<td>"; echo $row["bookauthor"]; echo "</td>";
			echo "<td>"; echo $row["bookedition"]; echo "</td>";
			echo "<td>"; echo $row["studentrollnumber"]; echo "</td>";
			echo "<td>"; echo $row["studentname"]; echo "</td>";
			echo "<td>"; echo $row["studentsection"]; echo "</td>";
			echo "<td>"; echo $row["studentdepartement"]; echo "</td>";
			echo "<td>"; echo $row["dateofissue"]; echo "</td>";
			echo "</tr>";
			$serial++;
		}
		echo"</table>";

		
		}
}
 
?>

<!-- Start of Footer -->

<div id="footer" style="margin-top: 100px;">
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