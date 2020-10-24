<!DOCTYPE html>
<html lang="en">
<head>
	<title> Manage Student </title>
		<link rel="stylesheet" type="text/css" href="adminCSS.css">
		<link rel="stylesheet" type="text/css" href="adminLoginCSS.css">

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
			<a target="_blank" href="Library.php" class="menu"> Library </a>
			<span class="bar"> |</span>
			<a id="this_page" href="Manage Student.php" class="menu"> Manage Students </a>
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


	<!-- Remove Student Form -->
	<form method="post" action="manage student.php">
		<div id="form_small_div" style="margin-left: 375px; margin-top: -10px; height: 200px;">
	<h3 style="color: white; padding: 10px"><center> Remove Student</center></h3>  
	<table id="form_small_field" style="margin-top: 10px;">
  		<tr>
 			<td> <input class="input" type="text" placeholder="  Student ID"/ name="rollnumber" required="">
 		</tr>
  		<tr>
 			<td>  <button type="submit" name="remove">Remove Student</button>
 		</tr>
	</table>
</div>
	</form>

<?php 

$connection = mysqli_connect("localhost","root","","lms");
if(isset($_POST["remove"]))
{

if($connection)
{
	$rollnumber = $_POST["rollnumber"];
	$query = " DELETE FROM student WHERE rollnumber = '$rollnumber' ";
	$result = mysqli_query($connection, $query);
	if($result)
	{
			?>
		<script type="text/javascript">
		alert("Student Removed!");
		window.location = "manage student.php";
		</script>
		<?php
	}
}

}
?>

	<div id="hr" style="margin-top: 50px;"> 
	<hr>
</div>

<br><br><br>

<!-- Block Student Form -->
	<form method="post" action="manage student.php">
		<div id="form_small_div" style="margin-left: 375px; margin-top: -10px; height: 200px;">
	<h3 style="color: white; padding: 10px"><center> Block Student</center></h3>  
	<table id="form_small_field" style="margin-top: 10px;">
  		<tr>
 			<td> <input class="input" type="text" placeholder="  Student ID"/ name="rollnumber" required="">
 		</tr>
  		<tr>
 			<td>  <button type="submit" name="block">Block Student</button>
 		</tr>
	</table>
</div>
	</form>

<?php 

$connection = mysqli_connect("localhost","root","","lms");
if(isset($_POST["block"]))
{

if($connection)
{
	$rollnumber = $_POST["rollnumber"];
	$query = " UPDATE student SET status = 'no' WHERE rollnumber = '$rollnumber'";
	$result = mysqli_query($connection, $query);
	if($result)
	{
			?>
		<script type="text/javascript">
		alert("Student Blocked!");
		window.location = "manage student.php";
		</script>
		<?php
	}
}

}
?>
<div id="hr" style="margin-top: 50px;"> 
	<hr>
</div>

 <br> <br> <br>  

<!-- Allow Student Form -->
	<form method="post" action="manage student.php">
		<div id="form_small_div" style="margin-left: 375px; margin-top: -10px; height: 200px;">
	<h3 style="color: white; padding: 10px"><center> Allow Student</center></h3>  
	<table id="form_small_field" style="margin-top: 10px;">
  		<tr>
 			<td> <input class="input" type="text" placeholder="  Student ID"/ name="rollnumber" required="">
 		</tr>
  		<tr>
 			<td>  <button type="submit" name="allow">Allow Student</button>
 		</tr>
	</table>
</div>
	</form>

<?php 

$connection = mysqli_connect("localhost","root","","lms");
if(isset($_POST["allow"]))
{

if($connection)
{
	$rollnumber = $_POST["rollnumber"];
	$query = " UPDATE student SET status = 'yes' WHERE rollnumber = '$rollnumber' ";
	$result = mysqli_query($connection, $query);
	if($result)
	{
			?>
		<script type="text/javascript">
					alert("Student Allowed!")

		window.location = "manage student.php";
		</script>
		<?php
	}
}

}
?>
<div id="hr" style="margin-top: 50px;"> 
	<hr>
</div>
<br>

	<!-- Change Student Form -->
<form method="post" action="manage student.php">
		<div id="Form_div" style="margin-top: 20px; margin-left: 275px; height: 250px;"> </div>

<div id="Form" style="margin-left: 375px; margin-top: -250px;">
	<h2 style="color: white;"> Change Student's Record </h2>  
		 <table>
			<tr>
 				<td> <input class="input" type="text" placeholder="  Student Roll Number" name="rollnumber" />
 				<td> <input class="input" type="text" placeholder="  Student Name (New)" name="fullname" />

	 		</tr>
			<tr>
 				<td> <input class="input" type="text" placeholder="  Section (New)" name="section" />
 				<td> <input class="input" type="text" placeholder="  Departement (New)" name="departement" />
	 		</tr><tr>
 				<td> <input class="input" type="text" placeholder="  Address (New)" name="address" />
 				<td> <input class="input" type="text" placeholder="  Contact # (New)" name="contact" />
	 		</tr>
	 		<tr>
	 			<td>  <button type="submit" name="change">Change Student</button>  </td>
	 		</tr>
 			
		</table>
</div>


</form>


<?php 

if(isset($_POST["change"]))
{
	$connection = mysqli_connect("localhost","root","","lms");
	$rollnumber = $_POST['rollnumber'];
	$fullname = $_POST['fullname'];
	$section = $_POST['section'];
	$departement = $_POST['departement'];
	$address = $_POST['address'];
	$contact = $_POST['contact'];
	$query = "UPDATE student SET fullname='$fullname', section='$section', departement = '$departement', address = '$address', phone = '$contact' WHERE id='$bookid'";
	$result = mysqli_query($connection, $query);
	if($result)
	{
		?>
		<script type="text/javascript">
					alert("Student Changed!")

		window.location = "manage student.php";
		</script>
		<?php	}
}
?>
    	

<!-- Start of Footer -->

<div id="footer" style="margin-top: 150px;">
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