<?php
require_once 'conecta.php';
	//require_once 'conteudo.php';	



if (isset($_POST['nome']) && !empty($_POST['nome'])) {
	$nome      = $_POST['nome'];
	$email     = $_POST['email'];
	$senha     = md5($_POST['senha']);
	$rg        = $_POST['rg'];
	$cpf       = $_POST['cpf'];
	$endereco  = $_POST['endereco'];
	$telefone  = $_POST['telefone'];
	$cidade    = $_POST['cidade'];
	$bairro    = $_POST['bairro'];
	$estado    = $_POST['estado'];

	$inserir   = "INSERT INTO usuarios (nome, email, senha, rg, cpf, endereco, telefone, cidade, bairro, estado) VALUES ('$nome', '$email', '$senha', '$rg', '$cpf', '$endereco', '$telefone', '$cidade', '$bairro', '$estado')";
	if (mysqli_query($con, $inserir)){
		header("Location:denuncia.php");
	}else{
		echo "erro";
	}

}

$seleciona_estado = "SELECT nome FROM estados";
$resultado        = mysqli_query($con, $seleciona_estado);
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
						<li class="navbar-item">
							<a class="navbar-link" href="index.php">Home</a>
						</li>
					<li class="navbar-item">
						<a class="navbar-link" href="login.php">Login</a>
					</li>
						<li class="navbar-item">
							<a class="navbar-link" href="cadastra.php">Cadastrar</a>
						</li>
					</div>
				</nav>
			</div>
		</div>
		<div class="container">
		<form class="formulario" action="cadastra.php" method="post">

			<h2>Cadastre-se:</h2>
			
			<input class="formulario-item" type="text" name="nome" placeholder="Digite seu nome completo"><br>
			<input class="formulario-item" type="email" name="email" placeholder="Digite seu e-mail"><br>
			<input class="formulario-item" type="passord" name="senha" placeholder="Digite seu senha"><br>
			<input class="formulario-item" type="text" name="rg" placeholder="Digite seu RG"><br>
			<input class="formulario-item" type="text" name="cpf" placeholder="Digite seu CPF"><br>
			<input  class="formulario-item" type="text" name="endereco" placeholder="Digite seu endereço"><br>
			<input class="formulario-item" type="text" name="telefone" placeholder="Digite seu telefone"><br>
			<input class="formulario-item" type="text" name="cidade" placeholder="Digite seu cidade"><br>
			<input  class="formulario-item" type="text" name="bairro" placeholder="Digite seu bairro"><br>
			<select class="select" name="estado">
				<?php 
				while ($consulta= mysqli_fetch_assoc($resultado)) {
					?>
					<option ><?php echo $consulta['nome']; ?></option>
					<?php
				}
				?>
				
			</select><br><br>
			<button class="btn">Enviar</button>
		</form>
	</div>
	