<?php
include_once ('../models/conexao.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda</title>
    <link rel="stylesheet" href="./CSS/estrutura.css">
    <link rel="stylesheet" href="./CSS/agenda.css">
</head>

<body>
    <header id="header">
        <div class="flex-mobile">
            <div class="mobile-menu">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div> <!-- mobile-menu -->
            <div class="logo-container">
                <div class="logo">
                    <a href="../index.php" class="inicio"><img src="./IMG/logos/logo-preta-png.png" alt="Logo"></a>
                </div>
            </div>
        </div> <!-- flex-mobile -->

        <div class="nav-bar">
            <div class="mobile-menu-fechar">
                <div class="mobile-menu-fechar-x">
                    <div class="line1"></div>
                    <div class="line2"></div>
                </div> <!-- mobile-menu-fechar -->
            </div>
            <nav class="menu">
                <div class="logo">
                    <a href="../index.php" class="inicio"><img src="./IMG/logos/logo-preta-png.png" alt="Logo"></a>
                </div>
                <ul>
                    <li><a href="galeria.php" class="ancora">
                            <p>Galeria</p>
                        </a></li>
                    <li><a href="playlist.php" class="ancora">
                            <p>Playlist</p>
                        </a></li>
                    <li><a href="agenda.php" class="ancora">
                            <p>Agenda</p>
                        </a></li>
                        <li><a href="./loginAdmin.php"><button class="area-restrita">Área Restrita</button></a></li>
                </ul>
            </nav>

        </div>
    </header>

    <main>
        <section class="agenda">
            <div class="titulo-menu">
                <h1>Agenda</h1>
            </div>

            <h2>Próximos Shows</h2>
            <div class="shows-existentes">
                <?php
                $sql = "SELECT cod_Agenda, DATE_FORMAT(data_Show, '%d/%m/%Y') AS data, estado, cidade FROM tb_agenda";
                $resultado = mysqli_query($conexao, $sql);

                $quantLinhas = mysqli_num_rows($resultado);

                echo "<script>";
                echo "let quantLinhas = " . mysqli_num_rows($resultado) . ";";
                echo "</script>";

                while ($dados = mysqli_fetch_array($resultado)) {
                ?>
                <!-- LISTA DE SHOWS NO SELECT DO BANCO -->
                <div class="show">
                    <div class="lista-shows">
                        <div id="data">Data:
                            <?php echo $dados['data']; ?>
                        </div>
                        <div>Estado:
                            <?php echo $dados['estado']; ?>
                        </div>
                        <div>Cidade:
                            <?php echo $dados['cidade']; ?>
                        </div>
                    </div>
                    <img id="logo-marca" src="./IMG/logos/logoMarca-preto.png" alt="logo-marca">
                </div>
                <?php
                }
                ?>
            </div>
        </section>
    </main>

    <footer id="rodape">
    <p class="info">Entre em contato para mais informações</p>
        <div class="icones">

            <a href="https://www.instagram.com/lumachadocasamentos/" target="_blank">
                <img class="icones-img"
                    src="./IMG/icones/instagram.png" alt="Contato Instagram" class="contatos">
            </a>

            <a href="https://web.whatsapp.com/" target="_blank">
                <img class="icones-img" src="./IMG/icones/whatsapp.png" alt="Contato WhatsApp"
                class="contatos">
            </a>

            <a href="https://www.google.com/intl/pt-BR/gmail/about/" target="_blank">
                <img class="icones-img" src="./IMG/icones/gmail.png" alt="Contato Gmail" class="contatos">
            </a>

        </div>
        <div class="copyright-div">Design by Alan, Jefferson, Julia, Rodrigo e Ryan - 2024&copy;</div>
    </footer>

    <script src="./JS/navBar.js"></script>
    <script src="./JS/carrossel.js"></script>
    <script src="./JS/footerAgenda.js"></script>
</body>

</html>