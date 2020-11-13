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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
        rel="stylesheet">
		<script src = "FaqjaPare.js"></script>
	</head>
	
	<body>
        <nav class = "nav-bar">
            <input type = "checkbox" id = "check">
            <label for = "check" class = "checkbtn">
				<i class = "fas fa-bars"></i>
			</label>
            
            <img src = "logo77.png" width = "200" height = "80">
            
             <?php
                $con=mysqli_connect('localhost','root','','id');
                if(isset($_POST['kerko'])){
                    $kursi=$_POST["kursi"];
                    $kursi=preg_replace("/^[a-zA-Z0-9]$/","",$kursi); 
                    $rezultat=mysqli_query($con,"SELECT * FROM kurset WHERE emer_kursi='$kursi'");
                    $num=mysqli_num_rows($rezultat);
                    if($num>0){
                        while($row=mysqli_fetch_array($rezultat)){
                            $emer_kursi=$row['emer_kursi'];
                            $cmimi=$row['cmimi'];
                            $njesi=$row['njesi'];
                            $_SESSION['emrikursi']=$emer_kursi;
                            $_SESSION['cmimi']=$cmimi;
                            $_SESSION['njesi']=$njesi;
                            header("Location:kursizgjedhur.php");
                        }
                    }
                    else{
                        header("Location:noresult.php");
                   } 
            }
            ?>
            
            <ul>
                <li><form action="Kurse.php" method="post" class="searchBox">
                <input class="searchInput" type="text" name="kursi" placeholder="Kerko">
                <button type="submit" class="searchButton" name="kerko">
                    <i class="material-icons">search</i>
                </button>
                </form></li>
            
				<li> <a href = "RrethNesh.php" >Rreth Nesh</a></li>
				<li> <a href = "Kurse.php" >Sherbimet</a></li>
				<li> <a href = "galeria.php" >Galeria</a></li>
				<li> <a href = "kontaktet.php" >Kontaktet</a></li>
                <li> <a href="logInSignUp.php">Log In/Sign Up</a></li>
                <a href="shporta.php"><button style="font-size:25px" ><i class="fa fa-shopping-cart" ></i></button></a>
            </ul>
        </nav>
       <h1 class = "noResult">NUK U GJET ASNJE REZULTAT!</h1>
	</body>
</html>


