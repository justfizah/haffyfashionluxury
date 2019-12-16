<?php 

session_start();





$con = mysqli_connect('	j1r4n2ztuwm0bhh5.cbetxkdyhwsb.us-east-1.rds.amazonaws.com','root','');



mysqli_select_db($con, 'uqxhpq33hdq5tvnk');


$username = $_POST['user'];
$email = $_POST['email'];
$password = $_POST['password'];
//CREATE TABLE `haffyfashionluxury`.`hfl` ( `username` VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL , `email` VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL , `password` VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL ) ENGINE = InnoDB;


$s = "Select * from hfl where username = '$username'";


$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);
		$_SESSION['username'] = $username;
		header("location:login.signup.php");

if ($num == 1) {
	echo "Username Already Taken";
}else{
	$reg= "Insert into hfl (`username`, `email`, `password`) VALUES ('$username', '$email', '$password')";
	mysqli_query($con, $reg);
	echo "Registration Successful";}

 ?>
