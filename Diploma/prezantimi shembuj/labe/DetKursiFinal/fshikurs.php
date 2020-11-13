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
                <li> <a href = "RrethNesh1.php">Rreth Nesh</a></li>
				<li> <a href = "Kurse_ADMIN.php" >Sherbimet</a></li>
				<li> <a href = "galeria1.php" >Galeria</a></li>
				<li> <a href = "kontaktet1.php" >Kontaktet</a></li>
                <li> <a href="logout.php">Logout</a></li>
                <a href="shporta.php"><button style="font-size:25px" ><i class="fa fa-shopping-cart" ></i></button></a>
            </ul>
        </nav>
       
        <h1 style="text-align:center; color:white">Lista e Kurseve</h1>
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
                        <th width="10%">ID</th>
						<th width="40%">Emri kursit</th>
						<th width="10%">Emri kategorise</th>
						<th width="10%">Cmimi</th>
						<th width="15%">Njesia</th>
						<th width="5%">Veprimi</th>
					</tr>
				<?php
					$con=mysqli_connect('localhost','root','');
                    mysqli_select_db($con,'id');
					$sql=mysqli_query($con,"SELECT * FROM kurset");
                    while($n=mysqli_fetch_assoc($sql)){
                    echo "<tr><td>".$n["id_kursi"]."</td>";
                    echo "<td>".$n["emer_kursi"]."</td>";
                    echo "<td>".$n["emer_kateg"]."</td>"; 
                    echo "<td>".$n["cmimi"]."</td>";  
                    echo "<td>".$n["njesi"]."</td>";  
                    echo "<td><a href='fshikurs.php?fshiProd=".$n["id_kursi"]."'>Fshi</a></td></tr>";}
                        if(isset($_GET['fshiProd'])){
                        $fshiProd=$_GET['fshiProd'];
                        $sql1="DELETE FROM kurset WHERE id_kursi='$fshiProd'";
                        $rezultati=mysqli_query($con,$sql1);
                        if($rezultati){
                        echo "<script type='text/javascript'>alert('Kursi u fshi me sukses!'); window.location.href='fshikurs.php'</script>";}
                            else
                              echo "<script type='text/javascript'>alert('Produkti nuk u fshi me sukses!'); window.location.href='fshikurs.php'</script>";  
                        }
					?>	
            </table>
	</body>
</html>






