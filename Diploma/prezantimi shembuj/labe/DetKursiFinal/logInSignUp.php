<?php
session_start();
if(isset($_SESSION["logged"]) && $_SESSION["logged"] === true)
{
    header("location:Kurse.php");
    exit;
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
            <ul class = "navbar-nav">
				<li> <a href = "RrethNesh.php" >Rreth Nesh</a></li>
				<li> <a href = "Kurse.php" >Sherbimet</a></li>
				<li> <a href = "galeria.php" >Galeria</a></li>
				<li> <a href = "kontaktet.php" >Kontaktet</a></li>
                <li> <a href = "#" >Log In/Sign Up</a></li>
            </ul>
        </nav>
		<div class = "hero">
			<div class = "form-box">
				<div class = "button-box">
					<div id = "btn"></div>
					<button type = "button" class = "toggle-btn" onclick = "login()">Log In</button>
					<button type = "button" class = "toggle-btn" onclick = "register()">Register</button>
				</div>
				<form id = "login" class = "input-group" action="login.php" method="post">
					<input type = "text" name="userID" class = "input-field" placeholder = "Emer Mbiemer" required>
					<input type = "password" class = "input-field" placeholder = "Shkruani Password-in" required>
					<input type = "checkbox" class = "check-box"><span>Ruaj Password-in</span>
					<button type = "submit" class = "submit-btn">Log in</button>
				</form>
				<form action="registration.php" method="post" id = "register" class = "input-group">
					<input type = "text" class = "input-field" name="userID" placeholder = "Emer Mbiemer" required>
					<input type = "email" class = "input-field" name="email" placeholder = "Email-i" required>
					<input type = "password" class = "input-field" name="password" placeholder = "Shkruani Password-in" required>
					<input type = "checkbox" class = "check-box"><span>Agree with terms and conditions.</span>
					<button type = "submit" class = "submit-btn">Sign Up</button>
				</form>
			</div>
		</div>
		
		<script>
		var x = document.getElementById("login");
		var y = document.getElementById("register");
		var z = document.getElementById("btn");
		
		function register(){
			x.style.left = "-400px";
			y.style.left = "50px";
			z.style.left = "110px";
		}
		function login(){
			x.style.left = "50px";
			y.style.left = "450px";
			z.style.left = "0";
		}
		</script>
		
	</body>
</html>


