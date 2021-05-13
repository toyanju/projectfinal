<?php
	$email=$_GET['email'];
	include("ligaBD.php");
	$editar="SELECT * from custmer where email='".$email."'";
	$faz_editar=mysqli_query($ligaBD,$editar);
	$registos=mysql_fetch_array($faz_editar);
?>
<html>
	<head><title>Editar Customer</title></head>
	<body>
		<form action="actualizacust.php?email=<?php echo $$email;?>"method="POST">
			Nome:
			<input type="text" name="nome" value='<?php echo $registos["nome"];?>'><br>
			user:
			<input type="text" name="user" value='<?php echo $registos["user"];?>'><br>
			Nome:
			<input type="number" name="idade" size="3" value='<?php echo $registos["idade"];?>'><br>
			Nome:
			<input type="number" name="numero" value='<?php echo $registos["numero"];?>'><br>
			<input type="submit" value="atualizar"><br>
		</form>
	</body>
</html>