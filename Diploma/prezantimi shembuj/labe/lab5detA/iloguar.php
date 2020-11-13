
<?php
$connection=mysqli_connect("localhost", "root", "", "filamtpreferuar");
	if (!$connection)
		die("Deshtoi lidhja me databazen!"); 
?>


<!DOCTYPE html>
<html>
<head>
	<title>Faqja kryesore</title>
	<style type="text/css">
		body {
			margin: 30px;
		}
		
	</style>
</head>
<body>

	<h3>Baza e te dhenave Filmat e Preferuar</h3><hr>

	<form action="#" method="post">

		<p>Titulli: <input type="text" name="titulli" required></p>
		<p>Cmimi:<input type="text" name="cmimi"  required></p>
		<p><input type="submit" name="ruaj"></p>

	</form>


<!--printimi i numrit te filmave-->
	<p>
		Numri i filmave ne tabele: 
			<?php
				$query_num="select * from filmatpreferuar";
				$result=mysqli_query($connection, $query_num);
				$num=mysqli_num_rows($result);
				echo $num;
			?>
	</p>
<?php

$query_lexo="select * from filmatpreferuar";
$result=mysqli_query($connection, $query_lexo);

echo "<strong>Filmat ne databaze:</strong><br>";
echo "<table border='1' style='position: absolute; '><tbody><tr><th>ID</th><th>Titulli</th><th>Cmimi</th><th>Preferuar</th></th>";
while($row=mysqli_fetch_array($result))
	echo "<tr><td>".$row['ID']."</td><td>".$row['Titulli']."</td><td>".$row['Cmimi']."</td><td><form action='#' method='post'><input type='hidden' name='id' value='".$row['ID']."'><input type='submit' name='preferuar' value='preferuar'></form></td></tr>";
echo "</tbody></table>";

//SHTIMI I FILMIT TE CAKTUAR

	if(isset($_POST['preferuar'])){
		extract($_POST);
        $query_add="insert into preferuar where IDpref='$id'";
	$result=mysqli_query($connection, $query_add);
	header("Location: iloguar.php");
	}
?>
    
</body>
</html>