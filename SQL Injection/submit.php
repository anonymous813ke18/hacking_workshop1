<?php
session_start();

$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'securityattack');

$email=$_POST['email'];
$password=$_POST['password'];

//PREVENTING SQL INJECTION ATTACK  
//$email= mysqli_real_escape_string($con, $_POST['email']);
//$password= mysqli_real_escape_string($con, $_POST['password']);

// we need a logical opr to return true => 'or'1=1
// this replaces the passwrd

$res=mysqli_query($con, "SELECT * FROM `sql_injection` WHERE `password`='$password' AND `email`='$email'");
if(mysqli_num_rows($res)>0) {
	$row_user=mysqli_fetch_array($res);
	$_SESSION['uid']=$row_user['id'];
	$_SESSION['name']=$row_user['name'];
	
	header('location:index.php?login=true');
}
else {
	header('location:index.php?login=false');
}
?>