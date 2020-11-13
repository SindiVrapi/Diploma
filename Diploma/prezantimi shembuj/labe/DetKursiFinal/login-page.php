
<html>
<head>
		<title>Qender Kursesh Vrapi</title>
		<meta charset = "utf-8">
		<meta name = "keywords" content = "kurse anglishtje, meso, anglisht, arritje, certifikate, nivelet, 
			A1, A2, B1, B2, C1, C2, sukses, qendra Vrapi">
		<meta name = "description" content = "Qendra Vrapi.">
		<link rel = "stylesheet" type = "text/css" href = "kurseStyle.css">
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
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
				<div class="toggle-btn">Login!</div>
		  </div>
		<form id = "login" class = "input-group" action="login.php" method="post">
			<input type = "text" name="userID" class = "input-field" placeholder = "Emer Mbiemer" required>
			<input type = "password" class = "input-field" placeholder = "Shkruani Password-in" required><br><br>
			<button type = "submit" class = "submit-btn">Log in</button>
		</form>
	   </div>
    </div>
       
</body>
</html>
