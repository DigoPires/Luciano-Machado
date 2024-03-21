<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administração</title>
    <link rel="stylesheet" href="./CSS/loginAdmin.css   ">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.css">

</head>

<body>
    <section>
        <h1>Login área restrita</h1>
        <div class="container">
            <form class="restrita" action="../controllers/login.php" method="POST">
                <input class="restrita-input" type="text" placeholder="Login" name="login" required autofocus>
                <input class="restrita-input" type="password" placeholder="Senha" name="senha" required>
                <input class="entrar" type="submit" value="Entrar" name="submit">
            </form>
        </div>
    </section>
        <?php
                if (isset($_SESSION['login_error'])) 
                {
                echo '<input type="hidden" id="login_error" value="' . $_SESSION['login_error'] . '">';
                unset($_SESSION['login_error']); 
                }
        ?>
        <script src="./JS/admin.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>