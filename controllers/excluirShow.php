<?php

session_start();

require_once '../models/conexao.php';

if (isset($_POST['excluir'])) {
    $cod_agenda = mysqli_escape_string($conexao, $_POST['cod_Agenda']);

    $sql = "DELETE FROM tb_Agenda WHERE cod_Agenda = '$cod_agenda'";

    if (mysqli_query($conexao, $sql)) {
        $_SESSION['mensagem-excluir'] = "Excluído com sucesso.";
    } else {
        $_SESSION['mensagem-excluir'] = "Erro ao excluir.";
    }

    header('Location: ../views/admin.php');
    exit();
}
?>
