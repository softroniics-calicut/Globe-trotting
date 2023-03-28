<?php

include '../connection.php';

$id = $_POST['id'];

$sql = mysqli_query($con, "SELECT booking.status,place.name,booking.reg_id,booking.amount,booking.date FROM place join booking on place.place_id = booking.package_id where booking.reg_id = '$id'");
$list = array();

if ($sql->num_rows>0) {
    while ($row = mysqli_fetch_assoc($sql)){

  

    $myarray['message'] = 'viewed';

    $myarray['place'] = $row['name'];

    $myarray['amount'] = $row['amount'];

    $myarray['date'] = $row['date'];
    
    $myarray['status'] = $row['status'];

   


   
    array_push($list, $myarray);
  
}
}
 else {

  $myarray['message'] = 'failed';
  array_push($list, $myarray);
}
echo json_encode($list);
