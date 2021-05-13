<?php
	include("ligaBD.php");
	
	$lista="SELECT * FROM customer $ordenar_por";
	$faz_lista=mysqli_query($ligaBD,$lista);
	$num_regists=mysqli_num_rows($faz_lista);
	
	if ($num_registos==0){
		echo"Não existem registos para listar";
		echo"<a href='index.html'Voltar</a>";
		exit;
	}
	echo "Nº total de registos encontrados";
	$num_registos;
?>
	<table border="1">
		<tr>
			<th><a href="listarordenado.php?ordenar=nome">Nome</th>
			<th><a href="listarordenado.php?ordenar=user">User</th>
			<th><a href="listarordenado.php?ordenar=email">E-mail</th>
			<th><a href="listarordenado.php?ordenar=idade">Idade</th>
			<th><a href="listarordenado.php?ordenar=numero">Numero</th>
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
		echo"</tr>";
	}
?>
//ordenar
<?php
	if (!isset($_GET['ordenar'])){
		$ordenar="nome";
	}
	else{
		$ordenar=$_GET['ordenar'];
	}
	if($ordennar=='nome'){
		$ordenar_por="order by nome";
	}
	if($ordennar=='user'){
		$ordenar_por="order by user";
	}
	if($ordennar=='email'){
		$ordenar_por="order by email";
	}
	if($ordennar=='idade'){
		$ordenar_por="order by idade";
	}
	if($ordennar=='numero'){
		$ordenar_por="order by numero";
	}
?>







	</table>