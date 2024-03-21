<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Playlist</title>
    <link rel="stylesheet" href="./CSS/estrutura.css">
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
        <section class="agenda"></section>
        <!-- Playlist -->
            <img src="./IMG/icones/deezer-logo.svg" alt="Deezer Logo" width="200" height="200">
            <iframe title="deezer-widget" src="https://widget.deezer.com/widget/auto/playlist/11253390324" width="95%" height="420" frameborder="0" allowtransparency="true" allow="encrypted-media; clipboard-write"></iframe>
        <br>
            <img src="./IMG/icones/youtube.svg" alt="YouTube Logo" width="200" height="200">
            <iframe class="youtube" width="95%" height="420" src="https://www.youtube.com/embed/videoseries?si=v752nCHwmyYCZPg7&amp;list=PLW4uJ-bxP4IEL3b9XAIkQWksC9RVw0_Le" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <br><br><br>
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