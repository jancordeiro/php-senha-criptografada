<?php

if(isset ($_POST['email'])) {
	
	include('conexao.php');
	
	$email = $_POST['email'];
	
	// recebe o valor do campo de name "passwd" e criptografa
	// a criptografia se dá pela função "password_hash"
	// com o parâmetro "PASSWORD_DEFAULT"
	
	$senha = password_hash($_POST['passwd'], PASSWORD_DEFAULT);
	
	$mysqli->query("INSERT INTO senhas (email, senha) VALUES ('$email', '$senha')");
	
	header ('Location: login.html');
}
?>