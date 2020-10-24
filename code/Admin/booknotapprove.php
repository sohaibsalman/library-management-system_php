<?php

$connection = mysqli_connect("localhost","root","","lms");
if($connection)
{
	$bookid = $_GET["bookid"];
	$deleteQuery = "DELETE FROM issue_book_request WHERE bookid='$bookid'";
	mysqli_query($connection, $deleteQuery);
	$query = "DELETE FROM issued_books WHERE  bookid = '$bookid' ";
	mysqli_query($connection, $query);
	$query = "DELETE FROM issued_history WHERE  bookid = '$bookid' ";
	mysqli_query($connection, $query);

}
?>
<script type="text/javascript">
		alert("Book NOT Approved!")
	window.location = "admin home.php";
</script>