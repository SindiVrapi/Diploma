<?php  
session_start();
$con = mysqli_connect("localhost", "root", "", "id");
if(isset($_POST["shto"]))
{
	if(isset($_SESSION["shporta"]))
	{
		$item_array_id = array_column($_SESSION["shporta"], "id_kursi");
		if(!in_array($_GET["id_kursi"], $item_array_id))
		{
			$count = count($_SESSION["shporta"]);
			$item_array = array(
				'id_kursi'			=>	$_GET["id_kursi"],
				'emer_kursi'			=>	$_POST["hidden_name"],
				'cmimi'		        =>	$_POST["hidden_price"],
				'sasia'		        =>	$_POST["sasia"]
			);
			$_SESSION["shporta"][$count] = $item_array;
		}
		else
		{
			echo '<script>alert("Kursi eshte shtuar nje here ne shporte!")</script>';
		}
	}
	else
	{
		$item_array = array(
			'id_kursi'			=>	$_GET["id_kursi"],
			'emer_kursi'			=>	$_POST["hidden_name"],
			'cmimi'		        =>	$_POST["hidden_price"],
			'sasia'		        =>	$_POST["sasia"]
		);
		$_SESSION["shporta"][0] = $item_array;
	}
}
if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shporta"] as $keys => $values)
		{
			if($values["id_kursi"] == $_GET["id_kursi"])
			{
				unset($_SESSION["shporta"][$keys]);
				echo '<script>alert("Produkti u hoq nga shporta!")</script>';
				echo '<script>window.location="shporta.php"</script>';
			}
		}
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
        
    <div class="container">
        <h1 style="text-align:center;color:white;">Detajet e porosise</h1>
			<table>
                <style>
                    h1{
                        left:50%;   
                    }
                    table {
                        margin-left:auto;
                        margin-right:auto;
                        border: 1px solid black;
                        width: 90%;
                        background-color:white;
                        border-collapse: collapse;
                    }

                    th, td {
                        text-align: middle;
                        padding: 8px;
                        border: 1px solid black;
                    }
                    th {
                        background-color: #191970;
                        color: white;
                    }
                    td a{
                        text-decoration: none;
                    }
                </style>
					<tr>
						<th width="40%">Emri Kursit</th>
						<th width="10%">Sasia</th>
						<th width="20%">Cmimi</th>
						<th width="15%">Total</th>
						<th width="5%">Veprimi</th>
					</tr>
					<?php
					if(!empty($_SESSION["shporta"]))
					{
						$total = 0;
						foreach($_SESSION["shporta"] as $keys => $values)
						{
					?>
					<tr>
						<td><?php echo $values["emer_kursi"]; ?></td>
						<td><?php echo $values["sasia"]; ?></td>
						<td> <?php echo $values["cmimi"]; ?> € </td>
						<td> <?php echo number_format($values["sasia"] * $values["cmimi"], 2);?> €</td>
						<td><a href="shporta.php?action=delete&id_kursi=<?php echo $values["id_kursi"]; ?>">Fshij</a></td>
					</tr>
					<?php
							$total = $total + ($values["sasia"] * $values["cmimi"]);
						}
					?>
                    <br>
                    
					<tr>
						
                        <td colspan="5" align="right">Totali: <?php echo number_format($total, 2); ?>€</td>
                        <td><a style="color:#191970;" href="shporta.php?paguaj" name="paguaj">Paguaj</a></td>
					</tr>
                    <?php
					}
                if(isset($_GET["paguaj"])){
                    $emri=$_SESSION["username"];
                    if(!empty($_SESSION["shporta"])){
                        $q = "INSERT INTO porosi (totali_porosi,klienti) VALUES ('$total','$emri')";
                        $rez = mysqli_query($con,$q);
                        unset($_SESSION['shporta']);
                        echo '<script> alert("Porosia u ruajt ne sistem!")</script>';
                        echo '<script> window.location="shporta.php"</script>';
                    }
                    else
                        echo '<script> alert("Ju nuk keni asnje produkt ne shporte!")</script>';
                        echo '<script> window.location="shporta.php"</script>';
                }
					?>
						
				</table>
    </div> 
</body>
</html>


