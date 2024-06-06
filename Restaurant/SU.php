<?php
session_start();
header('location:login.php');
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'restaurant');
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$s = "select * from user where email = '$email'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);
if($num == 1){
    echo"Email already exists";
}
else{
    $reg = "insert into user(name, email, password) values ('$name','$email','$password')";
    mysqli_query($con, $reg);

}
?>