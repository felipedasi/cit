<?php
	$servidor = "br892.hostgator.com.br";
	$usuario = "pontadof_felipe";
	$senha = "Fsc@1320";
	$dbname = "pontadof_port";
	
	//Criar a conexão
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
	if(!$conn){
		die("Falha na conexao: " . mysqli_connect_error());
	}else{
		//echo "Conexao realizada com sucesso";
	}
?>