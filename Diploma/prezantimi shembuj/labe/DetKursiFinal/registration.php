<?php
session_start();

$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'id');
$username=$_POST['userID'];
$email=$_POST['email'];
$password=($_POST['password']);

    $s="select * from user where name ='$username'";
    $result = mysqli_query($con, $s);
    if( mysqli_num_rows($result) == 1){
        echo "Username already taken";
    }
    else{
      $reg="insert into user(username,email,password) values ('$username','$email','$password')";
    mysqli_query($con,$reg);
        header("Location:login-page.php");
    }
?>
