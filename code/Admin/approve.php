<?php

$connection = mysqli_connect("localhost","root","","lms");
if($connection)
{
	$rollnumber = $_GET["rollnumber"];
	$query = "UPDATE student SET status='yes' WHERE rollnumber = '$rollnumber'";
	mysqli_query($connection, $query);
	$deleteQuery = "DELETE FROM student_registration WHERE rollnumber='$rollnumber'";
	mysqli_query($connection, $deleteQuery);
}
?>
<script type="text/javascript">
		alert("Student Approved!")
	window.location = "admin home.php";
</script>