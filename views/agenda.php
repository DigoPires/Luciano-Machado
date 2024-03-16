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
                    <li><button class="area-restrita">Área Restrita</button></li>
                    <form class="restrita" action="../controllers/login.php" method="POST">
                        <input class="restrita-input" type="text" placeholder="Login" name="login">
                        <input class="restrita-input" type="password" placeholder="Senha" name="senha">
                        <input class="entrar" type="submit" value="Entrar" name="submit">
                    </form>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <section class="agenda">
            <div class="titulo-menu">
                <h1>Agenda</h1>
                <h2>Próximos Shows</h2>
            </div>
            <div class="estrutura-show">
                <input type="text">
            </div>

            <div>
                <p>Data</p>
                <input type="text" name="ti" >
            </div>
        </section>
    </main>

    <footer class="footer">
        <p>Entre em contato para realizar seu orçamento</p>
        <div class="icones">
            <a href="https://www.instagram.com/lumachadocasamentos/" target="_blank"><img class="icones-img"
                    src="./IMG/icones/instagram.png" alt="Contato Instagram" class="contatos"></a>
            <a href="#"> <img class="icones-img" src="./IMG/icones/whatsapp.png" alt="Contato WhatsApp"
                    class="contatos"></a>
            <a href="#"> <img class="icones-img" src="./IMG/icones/gmail.png" alt="Contato Gmail" class="contatos"></a>
        </div>
        <div class="copyright-div">Design by Alan, Jefferson, Julia, Rodrigo e Ryan - 2024&copy;</div>
    </footer>

    <script src="./JS/navBar.js"></script>
    <script src="./JS/carrossel.js"></script>
    <script src="./JS/areaRestrita.js"></script>
</body>
</html>