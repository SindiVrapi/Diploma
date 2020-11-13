<?php

$con=mysqli_connect('localhost','root','');
session_start();
if(isset($_SESSION["logged"]) && $_SESSION["logged"] === true)
{
    header("location:iloguar.php");
    exit;
}
mysqli_select_db($con,'filamtpreferuar');
$username=$_POST['userID'];
$email=$_POST['email'];
$password=($_POST['password']);


    $s="select * from users where name ='$username' && password='$password'";
    $result = mysqli_query($con, $s);
    if(!$result || mysqli_num_rows($result) == 1){
        session_start();
        $_SESSION['logged']=true;
        $_SESSION['username']=$username;
        header("Location:iloguar.php");
    }
    else{
        $_SESSION['logged']=false;
        header("Location:iloguar.php");
        ("Emri i perdoruesit ose fjalekalimi eshte i gabuar!");
        }
    
?>