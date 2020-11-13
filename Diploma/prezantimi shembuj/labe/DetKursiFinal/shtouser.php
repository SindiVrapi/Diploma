<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'id');
if(isset($_POST['submit'])){
$emri_per = $_POST['emri_per'];
$email_per = $_POST['email_per'];
$password_per = $_POST['password_per'];
$u="SELECT * FROM user WHERE username ='$emri_per' OR email='$email_per'";
$result1 = mysqli_query($con, $u);
if( mysqli_num_rows($result1) == 1){
        echo '<script> alert("Ky emer perdoruesi ose ky email eshte i zene.")</script>';
        echo '<script>window.location="shtouser.php"</script>';
    }
    else{
        $shto1 = ("INSERT INTO user (username,email,password) VALUES ('$emri_per', '$email_per', '$password_per')");
        mysqli_query ($con,$shto1);
        echo '<script> alert("Perdoruesi u shtua me sukses!")</script>';
        echo '<script>window.location="shtouser.php"</script>';
    }
}
?>

<html>
	<!-- Koment -->
	<head>
		<title>Qender Kursesh Vrapi</title>
		<meta charset = "utf-8">
		<meta name = "keywords" content = "kurse anglishtje, meso, anglisht, arritje, certifikate, nivelet, 
			A1, A2, B1, B2, C1, C2, sukses, qendra Vrapi">
		<meta name = "description" content = "Qendra Vrapi.">
		<link rel = "stylesheet" type = "text/css" href = "kurseStyle.css">
        <link rel = "stylesheet" type = "text/css" href = "sherbimStyle.css">
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <script src="https://use.fontawesome.com/8e70b47309.js"></script>
        <script src="https://code.iconify.design/1/1.0.4/iconify.min.js"></script>
        <link rel ="stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0/css/all.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<script src = "FaqjaPare.js"></script>
	</head>
	
	<body>
        <nav class = "nav-bar">
            <input type = "checkbox" id = "check">
            <label for = "check" class = "checkbtn">
				<i class = "fas fa-bars"></i>
			</label>
            
            <img src = "logo77.png" width = "200" height = "80">
            
            <ul>
                <li> <a href = "RrethNesh1.php">Rreth Nesh</a></li>
				<li> <a href = "Kurse_ADMIN.php" >Sherbimet</a></li>
				<li> <a href = "galeria1.php" >Galeria</a></li>
				<li> <a href = "kontaktet1.php" >Kontaktet</a></li>
                <li> <a href="logout.php">Logout</a></li>
                <a href="shporta.php"><button style="font-size:25px" ><i class="fa fa-shopping-cart" ></i></button></a>
            </ul>
        </nav>
        
        <form class="shto_user" action="shtouser.php" method="post">
        <style>
            .shto_user{
                float: left;
                width:300px;
                border:1px #aaa;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
                padding:10px 30px 40px;
                margin-left:500px;
                margin-top:50px;
                background-color:white;
            }
            form h2 {
                text-align:center;
                text-shadow:2px 2px 2px #cfcfcf
            }
            .input {
                width:100%;
                height:30px;
                border-radius:2px;
                box-shadow:0 0 1px 2px black;
                margin-top:10px;
                padding:7px;
                border:none;
                margin-bottom:20px;
            }
            .submit {
                color:white;
                border-radius:3px;
                background-color:#191970;
                padding:5px;
                margin-top:40px;
                border:none;
                width:100%;
                height:30px;
                box-shadow:0 0 1px 2px black;
                font-size:18px
            }
        </style>
        <h2>Perdorues i ri</h2>
        <label>Emri i perdoruesit:</label>
        <input class="input" name="emri_per" type="text" value="" required>
        <label>Emaili i perdoruesit:</label>
        <input class="input" name="email_per" type="email" value="" required>
        <label>Fjalekalimi i perdoruesit:</label>
        <input class="input" name="password_per" type="password" value="" required>
        <input class="submit" name="submit" type="submit" value="Shto perdoruesin">
    </form>
</body>
</html>       
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        