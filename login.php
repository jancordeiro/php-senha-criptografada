<?php

if(isset ($_POST['email'])) {
	
	include('conexao.php');
	
	$email = $_POST['email'];	
	$senha = $_POST['passwd'];
	
	$sql_code = "SELECT * FROM senhas WHERE email = '$email' LIMIT 1";
	$sql_exec = $mysqli->query($sql_code) or die($mysqli->error);
	
	$usuario = $sql_exec->fetch_assoc();
	
	// Verifica se a senha digitada no formulario
	// confere com a senha criptografada no banco de dados.
	
	if(password_verify($senha, $usuario['senha'])) {
		echo "Usuário Logado com Sucesso!";
	} else {
		echo "Falha ao Logar! Usuário ou Senha incorretos";
	}
	
}
?>