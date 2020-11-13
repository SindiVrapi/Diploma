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
                </button></form></li>
                <li> <a href = "RrethNesh.php" >Rreth Nesh</a></li>
				<li> <a href = "Kurse.php" >Sherbimet</a></li>
				<li> <a href = "galeria.php" >Galeria</a></li>
				<li> <a href = "kontaktet.php" >Kontaktet</a></li>
                <li> <a href="logInSignUp.php">Log In/Sign Up</a></li>
                <a href="shporta.php"><button style="font-size:25px" ><i class="fa fa-shopping-cart" ></i></button></a>
            </ul>
        </nav>
       
        <?php
				$query = "SELECT * FROM kurset WHERE emer_kateg='adult'";
				$result = mysqli_query($con, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row =mysqli_fetch_array($result))
					{
        ?>
        <div class="kursi">
            <div class="kurse-list">
                <form method="post" action="shporta.php?action=add&id_kursi=<?php echo $row["id_kursi"]; ?>">
						<img src="<?php echo $row["imazhi"]; ?>" class="img-responsive" width="200" height="250"/><br />
                        <h1 class="text-info"><?php echo $row["emer_kursi"]; ?></h1>
                        <p class="cmimi">Cmimi: <?php echo $row["cmimi"]; ?>€</p>
                        <p class="sasia">Sasia: <input type="double" name="sasia" min="0" max="10" style="width:40px"> <?php echo $row["njesi"]; ?></p>
						<input type="hidden" name="hidden_name" value="<?php echo $row["emer_kursi"]; ?>" />
                        <input type="hidden" name="hidden_price" value="<?php echo $row["cmimi"]; ?>" />
                        <p><button type="submit "name="shto">Shto ne shporte <i class="fa fa-shopping-cart" ></i></button></p>
				</form>
            </div>
        </div>
    <?php
					}
				}
        ?>
	</body>
</html>


