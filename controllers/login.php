<?php
session_start();


if(isset($_POST['submit']) && !empty($_POST['login']) && !empty($_POST['senha']))
{
    include_once('../models/conexao.php');
    $login= $_POST['login'];
    $senha= $_POST['senha'];

    $sql = "SELECT * FROM tb_login WHERE usu_login = '$login' and usu_senha = '$senha'";
    $result = $conexao->query($sql);

    if(mysqli_num_rows($result) < 1)
    {
        unset ($_SESSION['login']);
        unset ($_SESSION['senha']);
        header('Location: ../index.php');
    }
    else
    {
        $_SESSION['login'] = $login;
        $_SESSION['senha'] = $senha;
        header('Location: ../views/admin.php');
    }
}
else
{
    header('Location: ../index.php');
}
?>
