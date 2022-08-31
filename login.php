<?php
session_start();
include 'connect.php';
$email=$_POST['email'];
$password=md5($_POST['password']);

$sql="SELECT * FROM `login` WHERE email='".$email. "'and password='".$password. "'";
$res=mysqli_query($con,$sql) or die (mysqli_error($con));
$c=mysqli_num_rows($res);

if($c>0)
{
    $_SESSION['email']=$email;
    echo "<script>window.location.href='../dashboard.php';</script>";
    
}else{
    echo "<script>alert('email and password is mismatch...');</script>";
    echo "<script>window.location.href='login.html';</script>";
}
mysqli_close($con);

?>