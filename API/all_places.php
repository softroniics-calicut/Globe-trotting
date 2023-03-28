<?php

include '../connection.php';

$sql = mysqli_query($con, "SELECT * FROM place");
$list = array();

if ($sql->num_rows>0) {
    while ($row = mysqli_fetch_assoc($sql)){

  

    $myarray['message'] = 'viewed';

    $myarray['place_id'] = $row['place_id'];

    $myarray['place'] = $row['name'];

    $myarray['about'] = $row['about'];

    $myarray['details'] = $row['details'];

    $myarray['image'] = $row['image'];

    $myarray['amount'] = $row['amount'];



   
    array_push($list, $myarray);
  
}
}
 else {

  $myarray['message'] = 'failed';
  array_push($list, $myarray);
}
echo json_encode($list);
