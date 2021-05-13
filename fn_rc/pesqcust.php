<?php
	$pesquisa=$_GET("pesquisa");
	include("ligaBD.php");
	
	$procura="SELECT * FROM customer like'%".$pesquisa."%";
	$faz_procura=mysqli_query($ligaBD,$procura);
	$num_registos=mysql_num_rows($faz_procura);
	
	if($num_registos==0){
		echo"Não existem registos com esse nome";
		echo"<a href='index.html'>Voltar</a>";
		exit;
	}
	echo"Nº total de registos encontrados".$num_registos;
?>
	<table border="1">
		<tr>
			<th>Nome</th>
			<th>User</th>
			<th>E-mail</th>
			<th>Idade</th>
			<th>Numero</th>
			<th>Editar</th>
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
		echo'<td><a href="editcust.php?email='.$registos['email'].'"> Editar</a></td>';
		echo"</tr>";
	}
?>
	</table>