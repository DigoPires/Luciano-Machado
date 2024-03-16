<?php
session_start();

if (!isset($_POST['alterar'])) {
    header('Location: ../views/admin.php');
    exit();
}

require_once('../models/conexao.php');

$data = mysqli_escape_string($conexao, $_POST['data']);
$estado = mysqli_escape_string($conexao, $_POST['estado']);
$cidade = mysqli_escape_string($conexao, $_POST['cidade']);
$cod_agenda = mysqli_escape_string($conexao, $_POST['cod_Agenda']);

$sql = "UPDATE tb_agenda SET data_show = '$data', estado = '$estado', cidade = '$cidade' WHERE cod_agenda = '$cod_agenda'";

if (mysqli_query($conexao, $sql)) {
    $_SESSION['mensagem'] = "Alterado com sucesso.";
} else {
    $_SESSION['mensagem'] = "Erro ao alterar.";
}

mysqli_close($conexao);

header('Location: ../views/admin.php');
exit();
?>
