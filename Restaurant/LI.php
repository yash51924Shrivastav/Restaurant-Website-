<?php
session_start();

$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'restaurant');
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$s = "select * from user where email = '$email' && password = '$password'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);
if($num == 1){
    header('location:Restaurant.html');
}
else{
    header('location:Login.php');

}
?>