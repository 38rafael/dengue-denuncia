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
		<section id="apresentacao">
			<div class="imagem-apresentacao">
				<img class="img" src="assets/images/dengue.jpg">
			</div>
			<div class="texto-apresentacao">
				<h1>A dengue pode matar!</h1><br>
				<h2>Não fique quieto, denuncie.</h2><br>
				<p> A dengue é uma doença viral causada por um arbovírus transmitido pela picada do mosquito Aedes aegypti. Entre seus principais sintomas, destacam-se a febre, dores no corpo e manchas vermelhas. A seguir, falaremos mais a respeito dessa importante doença que, infelizmente, leva várias pessoas à morte todos os anos em nosso país e é considerada uma das doenças infecciosas mais frequentes no Brasil. Texto retirado de <a href="https://brasilescola.uol.com.br/doencas/dengue.htm">brasilescola.uol.com.br</a> </p><p><strong> A dengue é considerada um grave problema de saúde pública</strong>.Se você encontrar algum foco de dengue faça login abaixo e denuncie, todos somos responsáveis. </p>
				<p><h3>Faça  <a href="login.php">login</a> ou se cadastre <a href="cadastra.php">aqui.</a> </h3></p>
			</div>
		</section>
	</div>
