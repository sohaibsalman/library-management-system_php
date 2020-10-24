<?php
echo "sadsaa";
$connection=mysqli_connect("localhost","root","","lms");
$dateofissue="SELECT SYSDATE FROM issue_book_request";
$date=mysqli_query($connection, $dateofissue);
echo $date;

?>