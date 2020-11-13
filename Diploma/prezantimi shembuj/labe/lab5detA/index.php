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



<!--hedhja ne db e filmit-->
	<?php

if (isset($_POST['ruaj'])) {
	extract($_POST);

	$id=substr($titulli, 0, 3);

	$query_insert="insert into filmatpreferuar values('$id', '$titulli', '$cmimi')";
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
				$query_num="select * from filmatpreferuar";
				$result=mysqli_query($connection, $query_num);
				$num=mysqli_num_rows($result);
				echo $num;
			?>
	</p>


<p></p>
<form id = "login" class = "input-group" action="login2.php" method="post">
					<input type = "text" name="userID" class = "input-field" placeholder = "Emer Mbiemer" required>
					<input type = "password" class = "input-field" placeholder = "Shkruani Password-in" required>
					<button type = "submit" class = "submit-btn">Log in</button>
</form>
    <form action="register.php" method="post" id = "register" class = "input-group">
					<input type = "text" class = "input-field" name="userID" placeholder = "Emer Mbiemer" required>
                    <input type = "text" class = "input-field" name="emer" placeholder = "Emer" required>
                    <input type = "text" class = "input-field" name="mbiemer" placeholder = "Mbiemer" required>
                    <input type = "text" class = "input-field" name="datelindje" placeholder = "datelindja" required>
					<input type = "email" class = "input-field" name="email" placeholder = "Email-i" required>
					<input type = "password" class = "input-field" name="password" placeholder = "Shkruani Password-in" required>
					<button type = "submit" class = "submit-btn">Sign Up</button>
				</form>
</body>
</html>