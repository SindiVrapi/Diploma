<?php 
      session_start();  
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
                <li> <a href = "RrethNesh1.php" >Rreth Nesh</a></li>
				<li> <a href = "#" >Sherbimet</a></li>
				<li> <a href = "galeria1.php" >Galeria</a></li>
				<li> <a href = "kontaktet1.php" >Kontaktet</a></li>
                <li> <a href="logout.php">Logout</a></li>
                <a href="shporta.php"><button style="font-size:25px" ><i class="fa fa-shopping-cart" ></i></button></a>
            </ul>
        </nav>
       
        <div class="veprimi">
            <div class="veprimi-list">
                <br><br><br>
                <a href="shtokurs.php" style="position:absolute; left:310px; top:100px; color:black;"><i class="fa fa-plus-circle" style="font-size:205px"></i></a>
                <a href="fshikurs.php" style="position:absolute; left:780px; top:100px; color:black;"><i class="fa fa-minus-circle" style="font-size:205px"></i></a>
                <br><br><h2 style="position:absolute; left:300px; top:300px;">Shto nje kurs</h2><h2 style="position:absolute; left:770px; top:300px;">Fshi nje kurs</h2>
                <br><br><br>
                <a href="shtouser.php" style="position:absolute; left:300px; top:400px; color:black;"><span class="iconify" data-icon="fa-solid:user-plus" data-inline="false"  style="font-size:205px"></span></a>
                <a href="fshiuser.php" style="position:absolute; left:800px; top:400px;  color:black;"><span class="iconify" data-icon="fa-solid:user-minus" data-inline="false"  style="font-size:205px"></span></a>
                <br><br><h2 style="position:absolute; left:280px; top:600px;">Shto nje perdorues</h2><h2 style="position:absolute; left:780px; top:600px;">Fshi nje perdorues</h2>
            </div>
        </div>
           
	</body>
</html>






