<?php 

	session_start();

	require_once '../models/conexao.php';
	if (isset($_POST['submit'])) {

		
		$data = mysqli_escape_string($conexao,$_POST['data']);
		$local = mysqli_escape_string($conexao,$_POST['local']);
		$cidade = mysqli_escape_string($conexao,$_POST['cidade']);

		$sql = "INSERT INTO tb_Agenda(data_Show, estado, cidade)VALUES('$data','$local','$cidade')";
	
		if (mysqli_query($conexao, $sql)) {
			$_SESSION['mensagem'] = "Show adicionado com sucesso!";
		} else {
			$_SESSION['mensagem_erro'] = "Erro ao adicionar" . mysqli_error($conexao);
		}
		header('Location: ../views/admin.php');
	
	}
