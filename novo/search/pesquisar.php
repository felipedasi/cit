<?php
	$servidor = "br892.hostgator.com.br";
	$usuario = "pontadof_felipe";
	$senha = "Fsc@1320";
	$dbname = "pontadof_port";
	//Criar a conexao
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
	
	$pesquisar = $_POST['pesquisar'];
	$result_cursos = "SELECT * FROM biotecnologia WHERE npedido LIKE '%$pesquisar%' LIMIT 5";
	$resultado_cursos = mysqli_query($conn, $result_cursos);
	
	while($rows_cursos = mysqli_fetch_array($resultado_cursos)){
		echo "Nº da patente: ".$rows_cursos['npedido']."<br>";
		echo "<input type='text' value='".$rows_cursos['npedido']."'/>";
	}
?>