<?php
session_start();

if (isset($_POST['submit']) && !empty($_POST['login']) && !empty($_POST['senha'])) {
    include_once('../models/conexao.php');
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM tb_login WHERE usu_login = '$login' and usu_senha = '$senha';";
    $result = $conexao->query($sql);

    if (mysqli_num_rows($result) < 1) {
        $_SESSION['login_error'] = "Acesso não autorizado ou login e senha incorretos!"; 
        header('Location: ../views/loginAdmin.php'); 
    } 
    else if($_SESSION['login'] = $login and $_SESSION['senha'] = $senha) 
    {
        $_SESSION['sucesso'] = "Login realizado com sucesso!";
        header('Location: ../views/admin.php');
    }
} 
else 
{
    header('Location: ../views/loginAdmin.php');
}
