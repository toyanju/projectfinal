<?php
	$email=$_GET["email"];
	$nome=$_POST["nome"];
	$user=$_POST["user"];
	$idade=$_POST["idade"];
	$numero=$_POST["numero"];
	include("ligaBD.php");
	$actualizar="update customer set nome='".$nome."',user='".$user."',idade='".$idade."',num='".$numero."', where email='".$email."'";
	$faz_atualizar=mysqli_query($ligaBd,$actualizar);
	echo "<p>O customer actualizado com sucesso!";
?>