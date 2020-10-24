<?php

$connection = mysqli_connect("localhost","root","","lms");
if($connection)
{
	$rollnumber = $_GET["rollnumber"];
	$deleteQuery = "DELETE FROM student_registration WHERE rollnumber='$rollnumber'";
	mysqli_query($connection, $deleteQuery);
	$deleteQuery = "DELETE FROM student WHERE rollnumber='$rollnumber'";
	mysqli_query($connection, $deleteQuery);
}
?>
<script type="text/javascript">
		alert("Student NOT Approved!")
	window.location = "admin home.php";
</script>