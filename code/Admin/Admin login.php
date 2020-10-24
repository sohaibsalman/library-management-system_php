<!DOCTYPE html>
<html lang="en">
<head>
	<title> Login</title>
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
	 			<h1 id="logoText">  Shaheen Library Management </h1>
	 		</td>
		</tr>
	</table>

<form method="post">
	
	<div id="form_small_div" style="height: 310px;">
	<table id="form_small_field" style="margin-top: 123px;">
 		 <tr>
 			<td> <img id="login_pic" src="admin-login.png"> </td>
		</tr>
  		<tr>
 			<td> <input class="input" type="text" placeholder="  ID" required="" name="id"> </td>
 		</tr>
  		<tr>
 			<td> <input class="input" type="password" placeholder="  Password" required="" name="password" /> </td>
 		</tr>
  		<tr>
 			<td>  <button type="submit" name="login">Login</button></td>
 		</tr>
	</table>
</div>

<br><br>
<?php 

if(isset($_POST["login"]))
{
	$connection = mysqli_connect("localhost","root","","lms");
	if($connection)
	{
		$count = 0;
		$ID = $_POST['id'];
		$PASSWORD = $_POST['password'];
		$query = " SELECT * FROM admin WHERE id = '$ID' AND password = '$PASSWORD' ";
		$result=mysqli_query($connection, $query);
		$count=mysqli_num_rows($result);
		if($count==0)
		{
			?>
			<div id="admin_login_verifiaction_div">		
				<p class="verifiaction_message_text"><strong>Invalid</strong> ID or Password<p>
			</div>
			<?php
		}
		else
		{
			?>
			<script type="text/javascript">
			window.location="admin home.php";
			</script>
			<?php
		}
	}	
}


?>


</form>

<div id="hr">
	<hr>
</div>

	<form method="post" action="admin login.php">

<div id="create_account_div" style="height: 500px;"> </div>
<div id="create_account" style="margin-top: -500px;">
	<h1 style="color: white;"> Create a new account </h1>
		 <table>
			<tr>
 				<td> <input class="input" type="text" placeholder="  Name" required="" name="fullname" /> </td>
		  		<td> <input class="input" type="password" placeholder="  Password"  required="" name="password" /> </td>
	 		</tr>
			<tr>
		  		<td> <input class="input" type="text" placeholder="  ID" required="" name="id" /> </td>
                <td> <input class="input" type="text" placeholder="  E-mail" required="" name="email"/> 
	 		</tr>
	 		
			<tr>
		  		<td> <input class="input" type="text" placeholder="  Phone No" name="phone" /> </td>
	 		</tr>
			<tr>
		  		<td> <input class="input" type="date" placeholder="  Select Date" name="date" /> </td>
	 		</tr>			<tr>
				<td class="heading"> Gender </td>
			</tr>		
			<tr>
				<td> 
					<input type="radio" value="Gender" name="gender" /> Male 
					<input type="radio" value="Gender" name="gender" /> Female
				</td>
			</tr>
			<tr height = "50px">
				<td class="heading"> Administrative Key </td>
			</tr>		
			<tr>
				<td> Enter Administrative key for first account: </td>
				<td>
					<input class="input" type="password" placeholder=" Administrative Key" name="key" required="">
				</td>
			</tr>
			
		</table>
	</form>
 <button type="submit" name="create">Create Account</button>
</div>

<!-- Start of Create Account Verifiaction -->
<br><br><br><br><br>
<?php 

	if(isset($_POST["create"]))
	{
		$connection=mysqli_connect("localhost","root","","lms");
		if($connection)
		{
			$fullname=$_POST['fullname'];
			$password=$_POST['password'];
			$id=$_POST['id'];
			$email=$_POST['email'];
			$phone=$_POST['phone'];
			$adminKey=$_POST['key'];
			$query="INSERT INTO admin(fullname,password,id,email,phone) 
					VALUES('$fullname','$password','$id','$email','$phone')";
			if($adminKey=="it17lms")
			{
				$result = mysqli_query($connection, $query);
				?>
					<div id="admin_create_verifiaction_div">		
					<p class="create_message_text"><strong>Your Account is <strong>Created</strong>! You can now <strong>Login as Admin</strong><p>
					</div>
				<?php
			}
			else
			{
				?>
<div id="admin_login_verifiaction_div">		
				<p class="verifiaction_message_text"><strong>Invalid</strong> Admin Key!<p>
			</div>				<?php
			}
			
		}
	}
?>

<!-- End of Create Account Verifiaction -->

<!-- Start of Footer -->
<br><br><br><br><br><br><br> 	
<div id="footer" style="margin-top: 50px;">
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