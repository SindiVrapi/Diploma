<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'id');
if(isset($_POST['submit'])){
$emri_p = $_POST['emri_p'];
$cmimi_p = $_POST['cmimi_p'];
$njesi_p = $_POST['njesi_p'];
$emri_k = $_POST['emri_k'];
$foto_p = $_POST['foto_p'];
     $p="SELECT * FROM kurset WHERE emer_kursi ='$emri_p'";
     $result = mysqli_query($con, $p);
if( mysqli_num_rows($result) == 1){
        echo '<script> alert("Ky produkt ekziston.Ju lutemi zgjidhni nje tjeter!")</script>';
        echo '<script>window.location="shtokurs.php"</script>';
    }
    else{
        $shto = ("INSERT INTO kurset (emer_kursi, emer_kateg, cmimi, njesi,imazhi) VALUES ('$emri_p', '$emri_k', '$cmimi_p','$njesi_p','$foto_p')");
        mysqli_query ($con,$shto);
        echo '<script> alert("Produkti u shtua me sukses!")</script>';
        echo '<script>window.location="shtokurs.php"</script>';
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
        
        <form class="shto_kurs" action="shtokurs.php" method="post">
        <style>
            .shto_kurs{
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
            <h2>Kurs i ri</h2>
            <label>Emri i kursit:</label>
            <input class="input" name="emri_p" type="text" value="" required>
            <label>Emri i kategorise:</label>
            <input class="input" name="emri_k" type="text" value="" required>
            <label>Cmimi i produktit:</label>
            <input class="input" name="cmimi_p" type="double" value="" required>
            <label>Njesia e prod:</label>
            <input class="input" name="njesi_p" type="text" value="" required>
            <label>Fotoja e produktit</label>
            <input type="file" name="foto_p" accept="image/*" required>
            <input class="submit" name="submit" type="submit" value="Shto produktin">
        </form>    
    </body>
</html>      
        
        
        
        
        
        
        
        