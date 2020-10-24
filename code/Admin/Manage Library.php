<!DOCTYPE html>
<html lang="en">
<head>
	<title> Manage Library </title>
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
			<a  href="Admin Home.php" class="menu"> Home </a>
			<span class="bar"> |</span>
			<a target="_blank" href="Library.php" class="menu"> Library </a>
			<span class="bar"> |</span>
			<a target="_blank" href="Manage Student.php" class="menu"> Manage Students </a>
			<span class="bar"> |</span>
			<a id="this_page" href="Manage Library.php" class="menu"> Manage Library </a>
			<span class="bar"> |</span>
			<a target="_blank" href="Return Book.php" class="menu"> Return book </a>
			<span class="bar"> |</span>
			<a href="Admin login.php" class="menu"> Sign out </a>
		</div>
        </nav>
    </div>
		
	<br><br><br>


	<!-- Remove Book Form -->
	<form method="post" action="manage library.php">
		<div id="form_small_div" style="margin-left: 375px; margin-top: -10px; height: 200px;">
	<h3 style="color: white; padding: 10px"><center> Remove Book	</center></h3>  
	<table id="form_small_field" style="margin-top: 10px;">
  		<tr>
 			<td> <input class="input" type="text" placeholder="  Book ID"/ name="bookid" required="">
 		</tr>
  		<tr>
 			<td>  <button type="submit" name="remove">Remove Book</button>
 		</tr>
	</table>
</div>
	</form>


<div id="hr" style="margin-top: 50px;"> 
	<hr>
</div>


<?php 

if(isset($_POST["remove"]))
{
	$connection = mysqli_connect("localhost","root","","lms");
	if($connection)
	{
		$bookid = $_POST["bookid"]; 
		$query = "DELETE FROM book WHERE  id = '$bookid' ";
		$result = mysqli_query($connection, $query);
		if($result)
		{
			?>
		<script type="text/javascript">
					alert("Book Removed!")

		window.location = "manage library.php";
		</script>
		<?php
		}
	}
}

?>

	<!-- Add Book Form -->
<form method="post" action="manage library.php">
		<div id="Form_div" style="margin-top: 20px; margin-left: 275px; height: 300px;"> </div>

<div id="Form" style="margin-left: 375px; margin-top: -300px;">
	<h2 style="color: white;"> Add Book	 </h2>  
		 <table>
			<tr>
 				<td> <input class="input" type="text" placeholder="  Book ID" name="bookid" required="" />
 				<td> <input class="input" type="text" placeholder="  Book Name" name="bookname"  required="" />
	 		</tr>
			<tr>
 				<td> <input class="input" type="text" placeholder="  Author"/ name="author" required="">
 				<td> <input class="input" type="text" placeholder="  Edition"/ name="edition" required="">
	 		</tr>
			<tr>
				<td>
					<select id="select_large" name="category" required="">
						<option hidden=""> Category </option>
						<option> Art </option>
						<option> Biology </option>
						<option> Business </option>
						<option> Chemistry </option>
						<option> Computer </option>
						<option> Engineering </option>
						<option> Language </option>
						<option> Islamic </option>
						<option> Mathematics </option>
						<option> Novel </option>
						<option> Physics </option>
						<option> Poetry </option>
						<option> Short Story </option>
					</select>
					
				</td>
	 		</tr>
	 		<tr>
	 			<td> <button type="submit" name="add">Add Book</button> </td>
	 		</tr>
 			
		</table>
</div>
</form>

<?php

	if(isset($_POST["add"]))
	{
		$connection = mysqli_connect("localhost","root","","lms");
		if($connection)
		{
			$bookid = $_POST['bookid'];

			$bookname = $_POST['bookname'];
			$author = $_POST['author'];
			$edition = $_POST['edition'];
			$category = $_POST['category'];
			$query = "INSERT INTO book VALUES ('$bookid','$bookname','$author','$edition','$category','yes')";
			$result = mysqli_query($connection, $query);
			if($result)
			{
				?>
						<script type="text/javascript">
													alert("Book Added!")

						window.location = "manage library.php";
						</script>
						<?php			
			}
		}
	}

?>

<div id="hr" style="margin-top: 120px;"> 
	<hr>
</div>

</form>
	<!-- Change Book Form -->
<form method="post" action="manage library.php">
		<div id="Form_div" style="margin-top: 20px; margin-left: 275px; height: 250px;"> </div>

<div id="Form" style="margin-left: 375px; margin-top: -250px;">
	<h2 style="color: white;"> Change Book	 </h2>  
		 <table>
			<tr>
 				<td> <input class="input" type="text" placeholder="  Book ID" name="bookid" />
 				<td> <input class="input" type="text" placeholder="  Book Name (New)" name="bookname" />

	 		</tr>
			<tr>
 				<td> <input class="input" type="text" placeholder="  Author Name (New)" name="author" />
 				<td> <input class="input" type="text" placeholder="  Edition (New)" name="edition" />
	 		</tr>
	 		<tr>
	 			<td>  <button type="submit" name="change">Change Book</button>  </td>
	 		</tr>
 			
		</table>
</div>


</form>
    	
<?php 
if(isset($_POST["change"]))
{
	$connection = mysqli_connect("localhost","root","","lms");
	$bookid = $_POST['bookid'];
	$newName = $_POST['bookname'];
	$newAuthor = $_POST['author'];
	$newEdition = $_POST['edition'];
	$query = "UPDATE book SET name='$newName', author='$newAuthor', edition = '$newEdition' WHERE id='$bookid'";
	$result = mysqli_query($connection, $query);
	if($result)
	{ 
		?>
		<script type="text/javascript">
					alert("Book Changed!")

		window.location = "manage library.php";
		</script>
		<?php
	}
}
?>
<!-- Start of Footer -->

<div id="footer" style="margin-top: 200px;">
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