<?php
	include("ligaBD.php");
	if(isset($_GET['email'])){
		$apagar=$_GET['email'];
		$apagacust="delete from customer where email='".$apagar."'";
		$faz_apagacust=mysqli_query($ligaBD,$apagacust);
		echo" O customer apagado com sucesso";
		exit;
	}
	$pesquisa=$_GET["pesquisa"];
?>
<table border="1">
		<tr>
			<th>Nome</th>
			<th>User</th>
			<th>E-mail</th>
			<th>Idade</th>
			<th>Numero</th>
			<th>Apagar</th>
		</tr>
<?php
	for($i=0;$i<$num_registos;$i++){
		$registos=mysqli_fetch_array($faz_lista);
		echo"<tr>";
		echo"<td>".$registos['nome']."</td>";
		echo"<td>".$registos['user']."</td>";
		echo"<td>".$registos['email']."</td>";
		echo"<td>".$registos['idade']."</td>";
		echo"<td>".$registos['numero']."</td>";
		echo'<td><a href="apagacust.php?email='.$registos['email'].'"> Apagar</a></td>';
		echo"</tr>";
	}
?>
	</table>