<?php

include '../connection.php';
$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$username = $_POST['username'];
$password = $_POST['password'];

$sql = mysqli_query($con, "INSERT INTO registration(name,email,mobile,username,password,type)values('$name','$email','$mobile','$username','$password','user')");



if ($sql) {

  

    $myarray['message'] = 'Added';

    // $myarray['login_id'] = $row['login_id'];

    // $myarray['type'] = $row['type'];
  
} else {

  $myarray['message'] = 'Failed';
}
echo json_encode($myarray);
