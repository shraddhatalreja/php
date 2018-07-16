<?php
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$mobile_no=$_POST['mobile no'];
$dob=$_POST['dob'];
$username=$_POST['gender'];
$address=$_POST['address'];
$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="register";
$conn=new mysqli($host,$dbusername,$dbpassword,$dbname);
$sql="INSERT INTO form(username,email,password,mobile no,dob,gender,address)
values('$username','$email','$password','$mobile no','$dob','$gender','$address');
?>