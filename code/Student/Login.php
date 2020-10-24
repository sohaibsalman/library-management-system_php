<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title> Login</title>
	<link rel="stylesheet" type="text/css" href="LoginCSS.css">
	<link rel="stylesheet" type="text/css" href="homeCSS.css">
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

<form method="post" action="Login.php">
<div id="form_small_div">
	<table id="form_small_field">
 		 <tr>
 			<td> <img id="login_pic" src="login.png"> </td>
		</tr>
  		<tr>
 			<td> <input class="input" type="text" placeholder="  ID (Roll #)" name="rollnumber" /> </td>
 		</tr>
  		<tr>
 			<td> <input class="input" type="Password" placeholder="  Password" name="password" /> </td>
 		</tr>
  		<tr>
 			<td>  
 				<button type="submit" name="login">Login</button>
 			</td>
	</table>
</div>
</form>

<!-- Start Login Verification -->

<?php
	if(isset($_POST["login"]))
	{
			$connection=mysqli_connect("localhost","root","","lms");
			if($connection)
			{
				$count=0;
				$query="SELECT * FROM student WHERE rollnumber = '$_POST[rollnumber]' 
						AND password = '$_POST[password]' AND status = 'yes' ";
				$result = mysqli_query($connection,$query);
				$count=mysqli_num_rows($result);
				if($count==0)
				{
					?>
					<br>
				<div id="student_login_verifiaction_div">		
				<p class="verifiaction_message_text"><strong>Invalid</strong> ID or Password<p>
				</div>				
					<?php
				}
				else
				{
					$_SESSION["student_id"] = $_POST['rollnumber'];
					?>
					<script type="text/javascript">
						window.location="home.php";
					</script>
					<?php
				}
			}
	}
?>

<!-- End of Login Verification -->

<div id="hr">
	<hr>
</div>
<br>

<form method="post" action="Login.php">
	<div id="create_account_div"> </div>

<div id="create_account">
	<h1 style="color: white;"> Create a new account </h1>  
		 <table>
			<tr>
 				<td> <input class="input" type="text" placeholder="  Name" required="" name="fullname" /> </td>
		  		<td> <input class="input" type="Password" placeholder="  Password" required="" name="password" /> </td>
	 		</tr>
			<tr>
 				<td> <input class="input" type="text" placeholder="  ID (Roll #)" required="" name="rollnumber" /> 
		  		<td> <input class="input" type="text" placeholder="  Section" required="" name="section" /> </td>
	 		</tr>
	 		
			<tr>
 				<td> <input class="input" type="text" placeholder="  E-mail" required="" name="email" /> 
		  		<td> <input class="input" type="text" placeholder="  Phone No" required="" name="phone" /> </td>
	 		</tr>
			<tr>
				<td class="heading"> Date of Birth </td>
				<td class="heading"> Department <td>
			</tr>
	 		<tr>
		 		<td style="width:30px;">
					<select class="select_small" name="day">
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
					<select class="select_small" name="month">
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
		 			<select class="select_small" name="year">
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
					<select id="select_large" name="departement">
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
			</tr>	
			<tr>
				<td class="heading"> Gender </td>
			</tr>		
			<tr>
				<td> 
					<input type="radio" value="Gender" name="gender" /> Male 
					<input type="radio" value="Gender" name="gender" /> Female
				</td>
			</tr>
		</table>
 <button type="submit" name="create">Create Account</button>
</div>
</form>
<br><br><br><br>
<?php 

	if(isset($_POST["create"]))
	{
		$connection=mysqli_connect("localhost","root","","lms");
		if($connection)
		{
			$fullname=$_POST['fullname'];
			$rollnumber=$_POST['rollnumber'];
			$password=$_POST['password'];
			$section=$_POST['section'];
			$email=$_POST['email'];
			$phone=$_POST['phone'];
			$departement=$_POST['departement'];
			$date=date('Y-m-d');
			$time=date('h:i:sa');
			$queryRegister="INSERT INTO student_registration(fullname,password,rollnumber,section,email,phone,departement,status,dateofreq,timeofreq) 
					VALUES('$fullname','$password','$rollnumber','$section','$email','$phone','$departement','no','$date','$time')";
			$queryStudent="INSERT INTO student(fullname,password,rollnumber,section,email,phone,departement,status) 
					VALUES('$fullname','$password','$rollnumber','$section','$email','$phone','$departement','no')";
			$result = mysqli_query($connection, $queryStudent);
			mysqli_query($connection, $queryRegister);
			if($result)
			{
				?>
			<script type="text/javascript">
				alert("Your Request has been submitted! A confirmation E-mail will be sent to your ID after Verification...");
				window.location = "login.php";
			</script>
		<?php
			}
		}
	}
?>

<!-- Start of Footer -->

<div id="login_footer">
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

<!-- Start of Create Account Verifiaction -->

<!-- End of Create Account Verifiaction -->

</html> 