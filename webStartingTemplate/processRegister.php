<?php
require_once('connect.php');

if(isset($_POST['signup']))
 {
//fetch form-data
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];

//check if username exist in the database
$sqlusername= mysqli_query($conn,"SELECT * FROM account
WHERE username = '$username'");
$checkusername=mysqli_num_rows($sqlusername);

//check for email
$sqlemail=mysqli query($conn,"SELECT * FROM account WHERE email ='$email'")


if($checkusername !=0){
    $msg="username already exist";
}
 }



?>