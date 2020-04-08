<?php 

session_start();
header('location: index.php');




$con = mysqli_connect('j1r4n2ztuwm0bhh5.cbetxkdyhwsb.us-east-1.rds.amazonaws.com','root','');



mysqli_select_db($con, 'uqxhpq33hdq5tvnk');

// if(isset($_POST['value'])){
$username = $_POST['admin'];
$email = $_POST['email'];
$password = $_POST['admin'];


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
