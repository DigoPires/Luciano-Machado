<?php
session_start();

if (!isset($_SESSION['login']) || empty($_SESSION['login'])) {
    header('Location: ../index.php');
    exit; 
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administração</title>
    <link rel="stylesheet" href="./CSS/admin.css">
</head>

<body>

    <div class="container">
        <h1>Administração</h1>
        <h2>Adicionar Novo Show</h2>
        <div>
            <form class="add_show">
                <label>Data:</label>
                <input class="date" type="date" required>
                <label>Local e horário:</label>
                <input class="local" type="text" required>
                <label>Cidade:</label>
                <input class="cidade" type="text" required>
                <div class="botoes">
                    <button type="submit">Adicionar Show</button>
                </div>
            </form>
            <a href="../controllers/logout.php"><button class="sair" type="submit" name="logout">Sair</button></a>
        </div>
    </div>

    <h2>Shows Existentes</h2>
    <div class="shows-existentes">
        <form>
            <button class="excluir" type="submit">Excluir</button>
        </form>
        <button class="editar">Editar</button>
    </div>

    <script src="./JS/admin.js"></script>

</body>

</html>
