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

		<p>ID: <input type="text" name="ID" required></p>
		<p>IDakt:<input type="text" name="IDakt"  required></p>
		<p><input type="submit" name="ruaj"></p>

	</form>



<!--hedhja ne db e filmit-->
	<?php

if (isset($_POST['ruaj'])) {
	extract($_POST);

	$query_insert="insert into lidhja values('$ID', '$IDakt')";
	$result=mysqli_query($connection, $query_insert);
		if (!$result) {
			echo "deshtoi shtimi";
		}
}

?>


<!--printimi i numrit te filmave-->
	<p>
		Numri i filmave ne tabele: 
			<?php
				$query_num="select * from lidhja";
				$result=mysqli_query($connection, $query_num);
				$num=mysqli_num_rows($result);
				echo $num;
			?>
	</p>


<!--printimi i filmave-->
<?php

$query_lexo="select * from lidhja";
$result=mysqli_query($connection, $query_lexo);

echo "<strong>Lidhjet ne databaze:</strong><br>";
echo "<table border='1' style='position: absolute; '><tbody><tr><th>#ID</th><th>#IDakt</th><th>Fshi</th></th>";
while($row=mysqli_fetch_array($result))
	echo "<tr><td>".$row['#ID']."</td><td>".$row['#IDakt']."</td><td><form action='#' method='post'><input type='hidden' name='id' value='".$row['#ID']."'><input type='submit' name='fshi' value='fshi' ></form></td></tr>";
echo "</tbody></table>";

//FSHIRJA E FILMIT TE CAKTUAR

	
	if(isset($_POST['fshi'])){
		extract($_POST);
		$query_delete1="delete from filmatpreferuar where ID='$id'";
	$result1=mysqli_query($connection, $query_delete1);
	header("Location: index3.php");
	}
?>
<?php
//printimi te dhenave

$query_lexo2="select * from filmatpreferuar order by ID";
$query_lexo3="select * from aktoret order by IDakt";
$result1=mysqli_query($connection, $query_lexo2);
$result2=mysqli_query($connection, $query_lexo3);

echo "<strong>Filmat ne databaze:</strong><br>";
echo "<table border='1' style='position: absolute; '><tbody><tr><th>ID</th><th>Titulli</th><th>Cmimi</th><th>Aktori</th>";
while($row=mysqli_fetch_array($result))
	echo "<tr><td>".$row['ID']."</td><td>".$row['Titulli']."</td><td>".$row['Cmimi']."</td><td>".$row['Emri']."</td></tr>";
echo "</tbody></table>";
header("Location: index3.php");
?>
</body>
</html>