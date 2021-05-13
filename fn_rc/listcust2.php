<?php
	include("ligaBD.php");
	
	$lista="SELECT * FROM customer ";
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
			<th>Nome</th>
			<th>User</th>
			<th>E-mail</th>
			<th>Idade</th>
			<th>Numero</th>
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
<form method="GET" name="form1">
	<select name="ordenar" onchange="javascript:form1.submit();">
		<option value="nenhum"SELECTED></option>
		<option value="nome">Nome</option>
		<option value="user">User</option>
		<option value="email">E-mail</option>
		<option value="idade">Idade</option>
		<option value="numero">Numero</option>
	</select>
	
</form>





