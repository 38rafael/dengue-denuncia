<?php 
require_once 'conecta.php';
session_start();


	if (isset($_POST['endereco'])) {
		$arquivo_temporario = $_FILES['imagem']['tmp_name'];
		$arquivo            = $_FILES['imagem']['name'];
		$diretorio          = '../assets/images';

		move_uploaded_file($arquivo_temporario, $diretorio.'/'.$arquivo);
	}
	 

$endereco 	= $_POST['endereco'];
$descricao  = $_POST['descricao'];
$imagem     = ($diretorio.'/'.$arquivo);
$inserir_denuncia = "INSERT INTO denuncia (endereco, descricao, imagem) VALUES ('$endereco', '$descricao','$imagem')";
$query            = mysqli_query($con, $inserir_denuncia);

header('Location:denuncia.php');
