<?php
require_once 'conecta.php';
session_start();
if (!$_SESSION['usuario']) {
	header("Location:login.php");
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
	
		<div class="fundo-navbar">
			<nav class="navbar">
				<a class="navbar-icone" href="#"> <img src="assets/images/logo.png" style="max-width: 100px;" > </a>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-ul">
						<li class="navbar-item" style="color: white;"> <?php 
						echo $_SESSION['usuario']; ?>

					</li>
					<li class="navbar-item">
						<a class="navbar-link" href="logout.php">Sair</a>
					</li>

				</div>
			</nav>
		</div>
	</div>
	<div class="container">
	<form class="formulario" action="registra_denuncia.php" method="post" enctype="multipart/form-data">
		<h2>Faça sua denuncia:</h2>
		<label>Endereço da Ocorrência</label>
		<input class="formulario-item" type="text" name="endereco" placeholder="Endereço da Ocorrência"><br>
		<label>Faça a descrição</label>
		<textarea class="formulario-text-area" name="descrição" placeholder="Faça sua descrição aqui"></textarea><br>
		<label>Selecione uma imagem abaixo:</label>
		<input id="file" type="file" name="imagem">
		<button class="btn">Enviar</button>
	</form>
</div>

<script type="text/javascript" src="assets/js/script.js"></script>