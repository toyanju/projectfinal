<?php
	$ligaBD=mysqli_connect("localhost","root","",);
	if (!$ligaBD){
		echo"echo<br>Erro: Não foi possível estabelecer ligação com o MySql";exit;
	}
	$escolheBD=mysqli_select_db($ligaBD,"ligaBD");
	if (!$escolheBD){
		echo"<br>Erro: Ao escolher a BD";exit;
	}
?>