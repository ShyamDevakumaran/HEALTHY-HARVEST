<?php

session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'login');

$name = $_POST['user'];
$pass = $_POST['password'];

$s = " SELECT * FROM logintable where name = '$name' && password = '$pass'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1)
{
    header('location:adminpage.php');
}
else{
   header('location:admin.php');
}

?>