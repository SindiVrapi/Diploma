<?php
$connection=mysqli_connect("localhost", "root", "", "filamtpreferuar");
	if (!$connection)
		die("Deshtoi lidhja me databazen!"); 
?>

<!DOCTYPE html>
<html>
<head>
	<title>Faqja dyte</title>
	<style type="text/css">
		body {
			margin: 30px;
		}
		
	</style>
</head>
<body>

	<h3>Baza e te dhenave Filmat e Preferuar</h3><hr>

	<form action="#" method="post">

		<p>Emri: <input type="text" name="emri" required></p>
		<p>Mbiemri:<input type="text" name="mbiemri"  required></p>
		<p><input type="submit" name="ruaj"></p>

	</form>



<!--hedhja ne db e aktorit-->
	<?php

if (isset($_POST['ruaj'])) {
	extract($_POST);

	$query_insert="insert into aktoret values('', '$emri', '$mbiemri')";
	$result=mysqli_query($connection, $query_insert);
		if (!$result) {
			echo "deshtoi shtimi";
		}
}

?>


<!--printimi i numrit te aktoreve-->
	<p>
		Numri i aktoreve ne tabele: 
			<?php
				$query_num="select * from aktoret";
				$result=mysqli_query($connection, $query_num);
				$num=mysqli_num_rows($result);
				echo $num;
			?>
	</p>


<!--printimi i aktoreve-->
<?php

$query_lexo="select * from aktoret";
$result=mysqli_query($connection, $query_lexo);

echo "<strong>Aktoret ne databaze:</strong><br>";
echo "<table border='1' style='position: absolute; '><tbody><tr><th>ID</th><th>Emri</th><th>Mbiemri</th><th>Fshi</th></th>";
while($row=mysqli_fetch_array($result))
	echo "<tr><td>".$row['IDakt']."</td><td>".$row['Emri']."</td><td>".$row['Mbiemri']."</td><td><form action='#' method='post'><input type='hidden' name='id' value='".$row['IDakt']."'><input type='submit' name='fshi' value='fshi'></form></td></tr>";
echo "</tbody></table>";


	//FSHIRJA E FILMIT TE CAKTUAR

	if(isset($_POST['fshi'])){
		extract($_POST);
		$query_delete="delete from aktoret where IDakt='$id'";
	$result=mysqli_query($connection, $query_delete);
	header("Location: index2.php");
	}
?>







</body>
</html>