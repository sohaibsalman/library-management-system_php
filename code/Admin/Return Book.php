<!DOCTYPE html>
<html>
<head>
	<title> Return Book</title>
</head>
<body>
<link rel="stylesheet" type="text/css" href="adminCSS.css">
		<link rel="stylesheet" type="text/css" href="adminLoginCSS.css">


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
			<a target="_blank" href="Library.php" class="menu"> Library </a>
			<span class="bar"> |</span>
			<a target="_blank" href="Manage Student.php" class="menu"> Manage Students </a>
			<span class="bar"> |</span>
			<a target="_blank" href="Manage Library.php" class="menu"> Manage Library </a>
			<span class="bar"> |</span>
			<a id="this_page" href="Return Book.php" class="menu"> Return book </a>
			<span class="bar"> |</span>
			<a href="Admin login.php" class="menu"> Sign out </a>
		</div>
        </nav>
    </div>
		
	<br><br><br>


<form method="post" action="return book.php">
	<div id="form_small_div" style="height: 290px;">
	<table id="form_small_field" style="margin-top: 30px; margin-left: 140px;">
	<tr>
		<h2 style="margin-left: 140px;"> Return Book </h2>
	</tr>
  		<tr>
 			<td> <input class="input" type="text" placeholder="  Student ID" required="" name="student_id"> </td>
 		</tr>
  		<tr>
 			<td> <input class="input" type="text" placeholder="  Book ID" required="" name="book_id" /> </td>
 		</tr>
  		<tr>
 			<td>  <button type="submit" name="return">Return</button></td>
 		</tr>
	</table>
</div>
</form>

<?php 

if(isset($_POST["return"]))
{
	$connection=mysqli_connect("localhost","root","","lms");
	if($connection)
	{
		$count = 0;
		$rollnumber = $_POST["student_id"];
		$bookid = $_POST["book_id"];
		$dateofreturn = date('Y-m-d');
		$dateofissue = 0;
		$res = mysqli_query($connection, "SELECT * FROM issued_books WHERE studentrollnumber ='$rollnumber' AND bookid = '$bookid' ");
		$count = mysqli_num_rows($res);
		if ($count == 0)
		{
			?>
			<br><br><br>
			<div id="message_div">
				<p id="message" style="color: white;"> <strong>Invalid</strong> Student ID or Book ID!</p>
			</div>
			<?php		}
		else 
		{
				while($row = mysqli_fetch_array($res))
				$dateofissue = $row["dateofissue"];

			$query = "UPDATE issued_history SET issuestatus='no', returnstatus = 'yes', dateofreturn = '$dateofreturn' WHERE studentrollnumber = '$rollnumber' ";
			$result = mysqli_query($connection, $query);
			mysqli_query($connection, "UPDATE book SET status = 'yes' WHERE id = '$bookid'");
			mysqli_query($connection, "DELETE FROM issued_books WHERE bookid = '$bookid'");
			if($result)
			{
				?>
						<script type="text/javascript">
							alert("Book Returned Successfully!");
							window.location="return book.php";
						</script>
						<?php
		}
		
	}

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