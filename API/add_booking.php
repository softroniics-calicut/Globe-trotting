
<?php

include '../connection.php';
$reg_id = $_POST['id'];
$package_id = $_POST['package_id'];
$amount = $_POST['amount'];

// $date = $_POST['date'];
$sql = mysqli_query($con, "insert into booking(reg_id,package_id,amount,date,status)values('$reg_id','$package_id','$amount',curdate(),'booking processing')");


if ($sql) {

 
    $myarray['message'] = 'Added';
} else {

  $myarray['message'] = 'Failed ';
}
echo json_encode($myarray);

?>