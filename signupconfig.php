<?php

session_start();


$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'login');

$name = $_POST['user'];
$pass = $_POST['password'];

$s = " SELECT * FROM logintable where name = '$name' ";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
   echo "<script> alert('USERNAME ALREADY TAKEN!')</script>";

}
else{
 $reg = "INSERT into logintable (name ,password) value ('$name','$pass')";
 mysqli_query($con,$reg);
 echo "<script> alert('YOU HAVE SIGNUPED SUCCESSSFULLY !')</script>";
 header:('location:index.html');
}

?>
