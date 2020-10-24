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
	<title>Messages</title>
		<link rel="stylesheet" type="text/css" href="homeCSS.css">
				<link rel="stylesheet" type="text/css" href="profileCSS.css">
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
		<div> <img id="home_page_pic" alt="Profile" src="messages.jpg"> </div>
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
			<a id="student_this_page" href="Messages.php" class="menu"> Messages (<?php echo $count ?>) </a>
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

	    <div> <h2> <center>Your Messages</center> </h2> </div>
    <br>



<?php


$connection=mysqli_connect("localhost","root","","lms");

if($connection)
{
	$count=0;

	$rollnumber = $_SESSION["student_id"];

	$query = "SELECT * FROM issued_history";

	$result = mysqli_query($connection, $query);

	$count = mysqli_num_rows($result);

	if($count==0)
	{
		?>
    	<div id="error_message_div">		
		<p class="error_message">No Messages!<p>
		</div>	
		<?php
	}
	else
	{
		while($row = mysqli_fetch_array($result))
		{
			$rn = $row["studentrollnumber"];
			$bookid = $row["bookid"];
			$issuestatus = $row["issuestatus"];
			$returnstatus = $row["returnstatus"];
			if($rn==$rollnumber && $issuestatus=='yes' && $returnstatus=='no')
			{
					echo "<table id='lms_table'>";
					echo "<tr>";
					echo "<th>"; echo "Message"; echo "</th>";echo "<td>"; echo "Your Request for Book-ID ";echo $bookid; echo " has been accepted. You can now issue this book.";; echo "</td>"; 
					echo"</tr>";
					echo"</table>";
						
			}
	}


		}
}	

	

	


?>



<!-- Start of Footer -->

<div id="footer" style="margin-top: -50px;">
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