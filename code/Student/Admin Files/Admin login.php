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


<div id="form_small_div">
	<table id="form_small_field" style="margin-top: 123px;">
 		 <tr>
 			<td> <img id="login_pic" src="admin-login.png"> </td>
		</tr>
  		<tr>
 			<td> <input class="input" type="text" placeholder="  User Name"/> </td>
 		</tr>
  		<tr>
 			<td> <input class="input" type="text" placeholder="  Password" /> </td>
 		</tr>
  		<tr>
 			<td> <input id="btn_style" type="submit" onclick="" value="Login"/> </td>
	</table>
</div>

<div id="hr">
	<hr>
</div>

	<form method="post" action="admin login.php">

<div id="create_account_div" style="height: 680px;"> </div>
<div id="create_account" style="margin-top: -680px;">
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
				<td class="heading"> Date of Birth </td>
			</tr>
	 		<tr>
		 		<td style="width:30px;">
					<select class="select_small">
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
					<select class="select_small">
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
		 			<select class="select_small">
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
			<tr height = "50px">
				<td class="heading"> Administrative Key </td>
			</tr>		
			<tr>
				<td> Enter Administrative key for first account: <input class="input" type="text" placeholder=" Administrative Key" name="key"> </td>
			</tr>
			
		</table>
	</form>
 <button type="submit" name="create">Create Account</button>
</div>

<!-- Start of Create Account Verifiaction -->

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
				<h2> Account Created! You can now LOGIN as Admin</h2>
				<?php
			}
			else
			{
				?>
				<h2> Invalid Admin Key!</h2>
				<?php
			}
			
		}
	}
?>

<!-- End of Create Account Verifiaction -->



<!-- Start of Footer -->
<br><br><br><br><br><br><br> 	
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