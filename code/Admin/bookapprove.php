<?php

$connection = mysqli_connect("localhost","root","","lms");
if($connection)
{
	$bookid = $_GET["bookid"];
	$date = date('Y-m-d');
	$query = "UPDATE book SET status='no' WHERE id = '$bookid'";
	mysqli_query($connection, $query);
	$deleteQuery = "DELETE FROM issue_book_request WHERE bookid='$bookid'";
	mysqli_query($connection, $deleteQuery);
	$issueQuery = "UPDATE issued_books SET dateofissue = '$date', issuestatus = 'yes' WHERE bookid = '$bookid' ";
	mysqli_query($connection, $issueQuery);
	$issueHistory = "UPDATE issued_history SET dateofissue = '$date', issuestatus = 'yes' WHERE bookid = '$bookid' ";
	mysqli_query($connection, $issueHistory);

}
?>y
<script type="text/javascript">
		alert("Book Approved!")

	window.location = "admin home.php";
</script>