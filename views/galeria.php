<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria</title>
    <link rel="stylesheet" href="./CSS/estrutura.css">
    <link rel="stylesheet" href="./CSS/galeria.css">
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
                    <a href="./index.html" class="inicio"><img src="./IMG/logos/logo-preta-png.png" alt="Logo"></a>
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
        <section>
            <div class="carousel-container">
                <h1>Galeria</h1>
                <div class="carross">
                    <button class="prev" onclick="prevSlide('carousel-1')">&#10094;</button>
                    <div class="carousel carousel-1">
                        <ul>
                            <li><img class="img" src="./IMG/carrossel/img1.png" alt="Imagem 1"></li>
                            <li><img class="img" src="./IMG/carrossel/img2.png" alt="Imagem 2"></li>
                            <li><img class="img" src="./IMG/carrossel/img3.png" alt="Imagem 3"></li>
                        </ul>
                    </div>
                    <button class="next" onclick="nextSlide('carousel-1')"> &#10095;</button>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer">
        <p>Entre em contato para realizar seu orçamento</p>
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
    <script src="./JS/carrossel-galeria.js"></script>
</body>

</html>