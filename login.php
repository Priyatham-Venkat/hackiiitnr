<?php
session_start();
if (isset($_POST['submit'])) 
{

$con = mysqli_connect("localhost","root","","formycity");

$email = mysqli_real_escape_string($con,$_POST['email']);
$password = md5(mysqli_real_escape_string($con,$_POST['password']));

$res = mysqli_query($con,"select * from users where email='$email' and password='$password';");

$row = mysqli_fetch_array($res,MYSQLI_ASSOC);
$count = mysqli_num_rows($res);

if($count == 1) 
      {
         $_SESSION['uname'] = $row['uname'];
         $_SESSION['email'] = $row['email']; 
         header("location: dashboard.php");
      }else 
      {
         die("The Username or Password entered are Invalid");
      }
}
?>