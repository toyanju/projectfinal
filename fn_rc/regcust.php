<?php
	include("ligaBD.php");
	//dados de formulário
	$nome=$_POST['nome'];
	$user=$_POST['user'];
	$email=$_POST['email'];
	$pass1=$_POST['pass1'];
	$pass2=$_POST['pass2'];
	$idade=$_POST['idade'];
	$numero=$_POST['numero'];
	if ($pass1!=$pass2){
		echo "<h1>As passwords devem ser iguais";
		exit;
	}
		$existe="SELECT * FROM customer where email='".$email."OR user='".$user."'";
		$faz_existe=mysqli_query($ligaBD,$existe);
		$jaexiste=mysqli_num_rows($faz_existe);
		
		if($faz_existe=="true"{
			$insere_cust="INSERT into customer(nome,user,email,pass1,pass2,idade,numero) values('$nome','$user','$email','$pass1','$pass2','$idade','$numero')";
			$faz_insere_cust=mysqli_query($ligaBD,$insere_cust);
			echo "O customer foi registado com sucesso!";
		}
		else{
			echo "O customer já se encontra registado";
		}
	//listar:
	$lista="SELECT * FROM customer";
	$faz_lista=mysqli_query($ligaB, $lista);
	$num_registos=mysqli_num_rows($faz_lista);
	if ($num_registos==0){
		echo"Não existem registos para listar";
		echo"<a href='form.html'>Voltar</a>";
		exit;
	}
	else{
	?>
		<table>
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
	</table>
	<?php
	}
	}
	
	
?>
