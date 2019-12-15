<?php 

session_start();
header('location: index.php');




$con = mysqli_connect('localhost','root','');



mysqli_select_db($con, 'haffyfashionluxury');

// if(isset($_POST['value'])){
$username = $_POST['user'];
$email = $_POST['email'];
$password = $_POST['password'];


$s = "Select * from hfl where username = '$username'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);


if ($num == 1) {
	$_SESSION['username'] = $username;
	header('location: dashboard.php');
}else{
header('location:login.signup.php');

}


 ?>
