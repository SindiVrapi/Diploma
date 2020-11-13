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
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <link rel ="stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0/css/all.min.css">
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
                <li> <a href = "RrethNesh.php" >Rreth Nesh</a></li>
				<li> <a href = "Kurse.php" >Sherbimet</a></li>
				<li> <a href = "galeria.php" >Galeria</a></li>
				<li> <a href = "#" >Kontaktet</a></li>
                <li> <a href = "logInSignUp.php" >Log In/Sign Up</a></li>
            </ul>
        </nav>
        <div class = "contact-info">
            
            <div class = "card">
                <i class = "card-icon far fa-envelope"></i>
                <p><a href="mailto:vrapisindi@gmail.com">vrapisindi@gmail.com</a></p>
            </div>
            
            <div class = "card">
                <i class = "card-icon fas fa-phone"></i>
                <p>+355673222586</p>
            </div>
            
            <div class = "card">
                <i class = "card-icon fas fa-map-marker-alt"></i>
                <p>Sauk i vjeter, Tirane</p>
            </div>
            
        </div>
        
        <?php
				$con=mysqli_connect('localhost','root','','id');
                $query="SELECT mesazhi FROM mesazh ORDER BY rand() LIMIT 1";
				if($result = mysqli_query($con, $query))
				{
					while($row =mysqli_fetch_array($result))
					{
        ?>
        <div class = "mesazh">
           <p><?php echo $row["mesazhi"]; ?></p>
        </div>
        <?php
					}
				}
        ?>
        <style type = "text/css">
            .mesazh{
                padding: 20px;
                margin: 20px;
                border-radius: 10px;
                background-color: black;
                color: white;
                position: absolute;
                top: 70%;
                left: 10%;
                font-size: 20px;
                z-index: -1;
            }
        
        </style>
	</body>
</html>



