<?php
session_start();
header('location:Contact.html');
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'restaurant');
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$reg = "insert into contact(name, email, message) values ('$name','$email','$message')";
mysqli_query($con, $reg);
?>