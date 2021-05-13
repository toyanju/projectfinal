<?php
	session_start();
	if (!isset($_SESSION['nome'])){
		echo"página reservada a utilizadores registados.";
		exit;
	}
?>