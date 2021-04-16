<?php

use function PHPSTORM_META\type;

require('../Function/connection.php');
$cat_data =mysqli_query($con, "select * from categories");
$cat_arr = array();
while($row=mysqli_fetch_assoc($cat_data))
{
    $cat_arr[]=$row;
}
if(isset($_POST['reg_user']))
{
  $username = mysqli_real_escape_string($con, $_POST['username']);
  $email = mysqli_real_escape_string($con, $_POST['email']);
  $password = mysqli_real_escape_string($con, $_POST['password']);
  $contact = mysqli_real_escape_string($con, $_POST['contact']);
  $address = mysqli_real_escape_string($con, $_POST['address']);
  $query = "insert into user (username, email, password, contact, address) values ('$username', '$email', '$password', '$contact', '$address')";
  if (mysqli_query($con, $query)) 
  {
   
    echo '<script>alert("Register Successfully")</script>';
  }
}
if(isset($_POST['login_user']))
{
  $username = mysqli_real_escape_string($con, $_POST['username']);
  $password = mysqli_real_escape_string($con, $_POST['password']);
  $res=mysqli_query($con,"select * from user where username='$username' and password='$password'");
$check_user=mysqli_num_rows($res);
if($check_user>0){
	$row=mysqli_fetch_assoc($res);
	$_SESSION['user_login']='yes';
	$_SESSION['USER_ID']=$row['id'];
	$_SESSION['USER_NAME']=$row['username'];
	header('location:index.php');
  }
  else
  {
    echo '<script>alert("Opps! enter the correct credentials.")</script>';
  }
}


?>