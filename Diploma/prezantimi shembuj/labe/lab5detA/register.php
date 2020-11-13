<?php
session_start();

$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'filamtpreferuar');
$username=$_POST['userID'];
$email=$_POST['email'];
$password=($_POST['password']);
$name=$_POST['emer'];
$mbiemer=$_POST['mbiemer'];
$datelindje=($_POST['datelindje']);

    $s="select * from users where name ='$username'";
    $result = mysqli_query($con, $s);
    if( mysqli_num_rows($result) == 1){
        echo "Username already taken";
    }
    else{
      $reg="insert into users(username,Emer,Mbiemer,datelindja,email,password) values ('$username','$email','$password','$name','$mbiemer','$datelindje')";
    mysqli_query($con,$reg);
        header("Location:index2.php");
    }
?>