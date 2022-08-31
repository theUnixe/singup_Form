<?php
 include 'connect.php';
 $name=$_POST['name'];
 $email=$_POST['email'];
 $password=md5($_POST['password']);
 $number=$_POST['number'];
 $type=$_POST['type'];

 $sql="INSERT INTO `signup`(`name`, `email`, `password`, `number`, `type`) VALUES ('$name','$email','$password','$number','$type')";
 $res=mysqli_query($con,$sql) or die (mysqli_error($con));

 if($res){
    $sql1="INSERT INTO `login`(`email`, `password`, `type`) VALUES ('$email','$password','$type')";
    $res1=mysqli_query($con,$sql1) or die(mysqli_error($con));
     echo "registration successfull";
    
 }else{
     echo "error..";
 }

 mysqli_close($con);
 ?>