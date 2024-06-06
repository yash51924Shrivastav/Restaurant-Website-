<?php
session_start();
header('location:Reservation.html');
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'restaurant');
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$phone = $_POST['phone_no'];
$email = $_POST['email'];
$total = $_POST['total_person'];
$purpose = $_POST['purpose'];
$date = $_POST['date'];
$time = $_POST['time'];
$reg = "INSERT INTO `reservation`(`fname`, `lname`, `phone_no`, `email`, `total_person`, `purpose`, `date`, `time`) VALUES ('$fname','$lname','$phone','$email','$total','$purpose','$date','$time')";
mysqli_query($con, $reg);
?>