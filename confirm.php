<?php
include 'connection.php';
$id = $_GET['id'];
mysqli_query($con,"update booking set status='booking confirmed' where book_id = '$id'");
header("location:Managepaymentdetails.php");
?>