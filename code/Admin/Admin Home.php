<!DOCTYPE html>
<html lang="en">
<head>
	<title> Admin Home </title>
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
			<a id="this_page" href="Admin Home.php" class="menu"> Home </a>
			<span class="bar"> |</span>
			<a target="_blank" href="Library.php" class="menu"> Library </a>
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

	<!-- Create Account Request Table -->

		<h2 style="color: darkcyan"><center> Create Account Requests </center></h2> 
	<br><br>

<?php

	$connection = mysqli_connect("localhost","root","","lms");
	if($connection)
	{
		$serial = 1;
		$count = 0;
		$query = " SELECT * FROM student_registration " ;
		$result = mysqli_query($connection,$query);
		$count = mysqli_num_rows($result);
		if($count==0)
		{
			?>
			<div id="message_div">
				<p id="message"> No Requests Found!</p>
			</div>
			<?php
		}
		else
		{
		echo "<table id='lms_table'>";
		echo "<tr>";
		echo "<th>"; echo "Sr. #"; echo "</th>";
		echo "<th>"; echo "Full Name"; echo "</th>";
		echo "<th>"; echo "Roll Number"; echo "</th>";
		echo "<th>"; echo "Section"; echo "</th>";
		echo "<th>"; echo "Departement"; echo "</th>";
		echo "<th>"; echo "Email"; echo "</th>";
		echo "<th>"; echo "Contact #"; echo "</th>";
		echo "<th>"; echo "Date of Request"; echo "</th>";
		echo "<th>"; echo "Time of Request"; echo "</th>";
		echo "<th>"; echo "Approve"; echo "</th>";
		echo "<th>"; echo "Not Approve"; echo "</th>";
		echo"</tr>";

		while($row = mysqli_fetch_array($result))
		{
			echo "<tr>";
			echo "<td>"; echo $serial; echo "</td>";
			echo "<td>"; echo $row["fullname"]; echo "</td>";
			echo "<td>"; echo $row["rollnumber"]; echo "</td>";
			echo "<td>"; echo $row["section"]; echo "</td>";
			echo "<td>"; echo $row["departement"]; echo "</td>";
			echo "<td>"; echo $row["email"]; echo "</td>";
			echo "<td>"; echo $row["phone"]; echo "</td>";
			echo "<td>"; echo $row["dateofreq"]; echo "</td>";
			echo "<td>"; echo $row["timeofreq"]; echo "</td>";

			echo "<td>"; ?> <a href="approve.php?rollnumber=<?php echo $row["rollnumber"]; ?>">Approve</a> <?php echo "</td>";
			echo "<td>"; ?> <a href="notapprove.php?rollnumber=<?php echo $row["rollnumber"]; ?>">Not Approve</a> <?php echo "</td>";
			echo "</tr>";
			$serial++;
		}
		echo"</table>";
	}
		}
?>
	
<div id="hr" style="margin-top: 50px; width: 800px; margin-left: 260px; "> 
	<hr>
</div>

<br><br>

	 <h2 style="color: darkcyan"><center> Issue Book Requests </center></h2> 
	<br><br>
		
<?php

	$connection = mysqli_connect("localhost","root","","lms");
	if($connection)
	{
		$serial = 1;
		$count = 0;
		$query = " SELECT * FROM issue_book_request  " ;
		$result = mysqli_query($connection,$query);
		$count = mysqli_num_rows($result);
		if($count==0)
		{
			?>
			<div id="message_div">
				<p id="message"> No Requests Found!</p>
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
		echo "<th>"; echo "Student Roll #"; echo "</th>";
		echo "<th>"; echo "Student Name"; echo "</th>";
		echo "<th>"; echo "Approve"; echo "</th>";
		echo "<th>"; echo "Not Approve"; echo "</th>";
		echo"</tr>";

		while($row = mysqli_fetch_array($result))
		{
			echo "<tr>";
			echo "<td>"; echo $serial; echo "</td>";
			echo "<td>"; echo $row["bookid"]; echo "</td>";
			echo "<td>"; echo $row["bookname"]; echo "</td>";
			echo "<td>"; echo $row["rollnumber"]; echo "</td>";
			echo "<td>"; echo $row["fullname"]; echo "</td>";
			echo "<td>"; ?> <a href="bookapprove.php?bookid=<?php echo $row["bookid"]; ?>">Approve</a> <?php echo "</td>";
			echo "<td>"; ?> <a href="booknotapprove.php?bookid=<?php echo $row["bookid"]; ?>">Not Approve</a> <?php echo "</td>";
			echo "</tr>";
			$serial++;
		}
		echo"</table>";
	}
	
		}
?>
	
	<br><br><br>


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