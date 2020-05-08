<?php 
require_once 'conecta.php';



if (isset($_POST['usuario']) and !empty($_POST['usuario']) and isset($_POST['senha']) and !empty($_POST['senha'])) {
	$usuario          = $_POST['usuario'];
	$senha            = md5($_POST['senha']);
	
	$verifica_usuario = "SELECT nome, senha FROM usuarios WHERE nome= '$usuario' AND senha= '$senha'";
	$query            = mysqli_query($con, $verifica_usuario);


	if (is_null(mysqli_fetch_array($query))){
		header("Location:cadastra.php");
	}else{
		session_start();
		$_SESSION['usuario'] = $_POST['usuario'];
		header("Location:denuncia.php");

	}

}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<meta content="width=device-width, initial-scale=1 maximum-scale=1">
	<title>Zer@dengue</title>
	<!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css"> -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
	<!-- Aqui começa o cabeçalho -->	
	
		<nav class="navbar">
			<div class="navbar-icone">
				<a  href="#"> <img src="assets/images/logo.png" style="max-width: 100px;" > </a>
			</div>
			<div class="navbar-ul">
				<ul >
					<li class="navbar-item">
						<a class="navbar-link" href="index.php">Home</a>
					</li>
					<li class="navbar-item">
						<a class="navbar-link" href="login.php">Login</a>
					</li>
					<li class="navbar-item">
						<a class="navbar-link" href="cadastra.php">Cadastrar</a>
					</li>
				</ul>
			</div>
			</nav>
			<div class="container">
			<form class="formulario" action="login.php"  method="post">
				<h2 >Seja bem vindo!</h2>
				<input class="formulario-item" type="text" name="usuario" placeholder="Usuário"><br>
				<input class="formulario-item" type="password" name="senha" placeholder="Senha"><br>
				<button class="btn">Login</button>
			</form>
		</div>
