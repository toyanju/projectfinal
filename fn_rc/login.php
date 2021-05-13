<?php
	$user=$_POST['user'];
	$pass=$_POST['pass'];
	include('ligaBD.php');
	$existe="SELECT * FROM customer where user='".$user."and password='".$pass."'";
	$faz_existe=mysqli_query($ligaBD,$existe);
	$num_registos=mysqli_num_rows($faz_existe);
	
	if($num_registos==1){
		$registos=mysql_fetch_array($faz_existe);
		session_start();
		$_SESSION["nome"]=$registos['nome'];
		header('location:customer.php');
	}
	else{
		header('location:index.html');
	}
?>