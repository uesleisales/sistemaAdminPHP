<?php

session_start();
$usuariot = $_POST['usuario'];
$senhat = $_POST['senha'];

include_once("conexao.php");

$result = $conectar->query("SELECT * FROM usuarios WHERE login='$usuariot' AND senha='$senhat' LIMIT 1");

$resultado = mysqli_fetch_assoc($result);



if(empty($resultado)){

	$_SESSION['loginErro'] = "Usuário ou senha inválido";
	header("Location: login.php");
}
else{
	$_SESSION['usuarioId']          = $resultado['id'];
	$_SESSION['usuarioNome']        = $resultado['nome'];
	$_SESSION['usuarioSenha']       = $resultado['senha'];
	$_SESSION['usuarioNivelAcesso'] = $resultado['nivel_acesso_id'];
	$_SESSION['usuarioLogin']       = $resultado['login'];

	if($_SESSION['usuarioNivelAcesso'] == 1){
		header("Location: administrativo.php");
	}
	else{
		header("Location: usuario.php");
	}
}

?>