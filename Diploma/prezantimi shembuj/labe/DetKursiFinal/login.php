<?php

$con=mysqli_connect('localhost','root','');
session_start();
mysqli_select_db($con,'id');
$username=$_POST['userID'];
$email=$_POST['email'];
$password=($_POST['password']);

    $s="select * from user where name ='$username' && password='$password'";
    $result = mysqli_query($con, $s);
    if(!$result || mysqli_num_rows($result) == 1){
        session_start();
        $_SESSION['logged']=true;
        $_SESSION['username']=$username;
        if($_SESSION["username"]!='sindi vrapi')
        header("Location:Kurse.php");
        else
        header("Location:Kurse_ADMIN.php");
    }
    else{
        $_SESSION['logged']=false;
        header("Location:login-page.php");
        ("Emri i perdoruesit ose fjalekalimi eshte i gabuar!");
        }
    
?>