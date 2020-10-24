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
	<title>Profile</title>
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
		<div> <img id="home_page_pic" alt="Profile" src="profile.jpg"> </div>
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
			<a id="student_this_page" href="Profile.php" class="menu"> Your Profile </a>
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

	    <div> <h2> <center>Profile Information </center> </h2> </div>
    <br>

<?php
$connection = mysqli_connect("localhost", "root", "", "lms");
if($connection)
{
    $rollnumber = $_SESSION["student_id"];
    $query = "SELECT * FROM student where rollnumber = '$rollnumber' ";
    $result = mysqli_query($connection, $query);
    if($result)
    {
    	while($row = mysqli_fetch_array($result))
				{
					$fullname = $row["fullname"];
					$section = $row["section"];
					$departement = $row["departement"];
					$email = $row["email"];
					$phone = $row["phone"];
					$password = $row["password"];
					
				}
    	echo "<table id='lms_table'>";
				echo "<tr>";
				echo "<th>"; echo "Roll Number"; echo "</th>";echo "<td>"; echo $rollnumber; echo "</td>"; 
				echo"</tr>";
				echo "<tr>";
				echo "<th>"; echo "Full Name"; echo "</th>";echo "<td>"; echo $fullname; echo "</td>"; 
				echo"</tr>";
				echo "<tr>";
				echo "<th>"; echo "Section"; echo "</th>";echo "<td>"; echo $section; echo "</td>"; 
				echo"</tr>";
				echo "<tr>";
				echo "<th>"; echo "Departement"; echo "</th>";echo "<td>"; echo $departement; echo "</td>"; 
				echo"</tr>";
				echo "<tr>";
				echo "<th>"; echo "E-mail ID"; echo "</th>";echo "<td>"; echo $email; echo "</td>"; 
				echo"</tr>";
				echo "<tr>";
				echo "<th>"; echo "Contact"; echo "</th>";echo "<td>"; echo $phone; echo "</td>"; 
				echo"</tr>";
				echo"</table>";
					}
    }


?>
<br>
    <div> <h2> <center>Issue History</center> </h2> </div>

	   <!-- <div id="verticle_bar" class="display_style"></div>  -->

<?php
$connection = mysqli_connect("localhost", "root", "", "lms");
if($connection)
{
	$count = 0;
    $rollnumber = $_SESSION["student_id"];
    $query = "SELECT * FROM issued_history where studentrollnumber = '$rollnumber' ";
    $result = mysqli_query($connection, $query);
    $count = mysqli_num_rows($result);
    if($count==0)
    {
    	?>
    	<div id="error_message_div">		
		<p class="error_message">You have not issued any book yet!<p>
		</div>	
		<?php
    }
    else
    {
    	$serial = 1;
    	echo "<table id = 'lms_table'>";
		echo "<tr>";
		echo "<th>"; echo "Sr. #"; echo "</th>";
		echo "<th>"; echo "Book ID"; echo "</th>";
		echo "<th>"; echo "Book Name"; echo "</th>";
		echo "<th>"; echo "Author's Name"; echo "</th>";
		echo "<th>"; echo "Book Edition"; echo "</th>";
		echo "<th>"; echo "Date of Issue"; echo "</th>";
		echo "<th>"; echo "Return Status"; echo "</th>";
		echo "<th>"; echo "Date of Return"; echo "</th>";
		echo "<th>"; echo "Fine"; echo "</th>";
		echo"</tr>";

		while($row = mysqli_fetch_array($result))
		{
			echo "<tr>";
			echo "<td>"; echo $serial; echo "</td>";
			echo "<td>"; echo $row["bookid"]; echo "</td>";
			echo "<td>"; echo $row["bookname"]; echo "</td>";
			echo "<td>"; echo $row["bookauthor"]; echo "</td>";
			echo "<td>"; echo $row["bookedition"]; echo "</td>";
			echo "<td>"; echo $row["dateofissue"]; echo "</td>";
			echo "<td>"; echo $row["returnstatus"]; echo "</td>";
			echo "<td>"; echo $row["dateofreturn"]; echo "</td>";
			echo "<td>"; echo $row["fine"]; echo "</td>";
			echo "</tr>";
			$serial++;
		}
		echo"</table>";
    }
}


?>
<br>


<form method="post" action="profile.php">
<div id="form_small_div" style="margin-left: 375px; margin-top: 50px; height: 300px;">
    <h2 style="color: white;"><center> Change Password </center></h2>  
    <table id="form_small_field" style="margin-top: 10px;">
        <tr>
            <td> <input class="input" type="password" placeholder="  Old Password" required="" name="old" />
        </tr>
        <tr>
            <td> <input class="input" type="password" placeholder="  New Password" required="" name="new" />
        </tr>
        <tr>
            <td> <input class="input" type="password" placeholder="  Confirm Password" required="" name="confirm_new" />
        </tr>
        <tr>
		<td>  <button type="submit" name="change">Change</button></td> 
		</tr>
    </table>
</div>
</form>

<?php 

if(isset($_POST["change"]))
{
	if($password == $_POST['old'] && $_POST['new'] == $_POST["confirm_new"])
	{
		$newPassword = $_POST["confirm_new"];
		$query = "UPDATE student SET password = '$newPassword' WHERE rollnumber = '$rollnumber' ";
		$result = mysqli_query($connection, $query);
		if($result)
		{
			?>
			<script type="text/javascript">
				alert("Password Changed Successfully!");
				window.location = "profile.php";
			</script>
		<?php
		}
	}
	else
	{
		?>
			<script type="text/javascript">
				alert("Incorrect Password Entered! Please try again...");
				window.location = "profile.php";
			</script>
		<?php
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