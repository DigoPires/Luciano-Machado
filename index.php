<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Descrição do seu site aqui">
    <title>Menu Principal</title>
    <link rel="stylesheet" href="./views/CSS/estrutura.css">
    <link rel="stylesheet" href="./views/CSS/menu-principal.css">
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
                    <a href="./index.php" class="inicio"><img src="./views/IMG/logos/logo-preta-png.png" alt="Logo"></a>
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
                    <a href="./index.php" class="inicio"><img src="./views/IMG/logos/logo-preta-png.png" alt="Logo"></a>
                </div>
                <ul>
                    <li><a href="./views/galeria.php" class="ancora">
                            <p>Galeria</p>
                        </a></li>
                    <li><a href="./views/playlist.php" class="ancora">
                            <p>Playlist</p>
                        </a></li>
                    <li><a href="./views/agenda.php" class="ancora">
                            <p>Agenda</p>
                        </a></li>
                    <li><a href="./views/loginAdmin.php"><button class="area-restrita">Área Restrita</button></a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <section class="menu-principal">
            <!-- sobre o músico -->
            <div class="sobre-artista">
                <h2 class="title-sobre">Sobre</h2>
                <div class="sobre-div">
                    <p class="sobre">Bem-vindo ao nosso espaço dedicado a celebrar momentos especiais! Com mais de 15
                        anos de experiência na condução de cerimônias de casamentos e eventos, temos a honra de ser
                        parte dehistórias únicas em diferentes partes do mundo.br
                        <br><br>
                        Em nossa jornada, encontramos inspiração na arte de tornar sonhos realidade e criar memórias que
                        resistem ao teste do tempo. Se você está prestes a dar o próximo passo no casamento ou
                        planejando um evento significativo, estamos aqui para fazer parte desses momentos
                        extraordinários.

                    </p>
                </div>
            </div>
            <!-- carrosel -->
            <div class="carrosel">
                <h2 class="avaliacao">Feedbacks</h2>
                <div class="op-clientes">
                    <button class="control-btn" onclick="prevSlide()">&lang;</button>
                    <div class="carrosel-clientes">
                        <div class="carousel-container">
                            <div class="carousel-wrapper">
                                <div class="carousel-item">
                                    <ul>
                                        <li class="nome-cli">Nicole Gomes Melo</li>
                                        <li class="avaliacao-li">"É claro que o consenso sobre a necessidade de
                                            qualificação
                                            promove a alavancagem do sistema de participação geral."</li>
                                    </ul>
                                </div>
                                <div class="carousel-item">
                                    <ul>
                                        <li class="nome-cli">Ágatha Correia Carvalho</li>
                                        <li class="avaliacao-li">"Caros amigos, o julgamento imparcial das
                                            eventualidades
                                            faz
                                            parte de um processo de gerenciamento das posturas dos órgãos dirigentes com
                                            relação às suas atribuições."
                                        </li>
                                    </ul>
                                </div>
                                <div class="carousel-item">
                                    <ul>
                                        <li class="nome-cli">Yasmin Silva Lima</li>
                                        <li class="avaliacao-li">"A nível organizacional, a execução dos pontos do
                                            programa
                                            maximiza as possibilidades por conta das diversas correntes de pensamento."
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="control-btn" onclick="nextSlide()">&rang;</button>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer">
        <p>Entre em contato para realizar seu orçamento</p>
        <div class="icones">
            <a href="https://www.instagram.com/lumachadocasamentos/" target="_blank"><img class="icones-img"
                    src="./views/IMG/icones/instagram.png" alt="Contato Instagram" class="contatos"></a>
            <a href="https://web.whatsapp.com/" target="_blank"> <img class="icones-img"
                    src="./views/IMG/icones/whatsapp.png" alt="Contato WhatsApp" class="contatos"></a>
            <a href="https://www.google.com/intl/pt-BR/gmail/about/" target="_blank"> <img class="icones-img"
                    src="./views/IMG/icones/gmail.png" alt="Contato Gmail" class="contatos"></a>
        </div>
        <!-- teste -->
        <div class="copyright-div">Design by Alan, Jefferson, Julia, Rodrigo e Ryan - 2024&copy;</div>
    </footer>

    <script src="./views/JS/navBar.js"></script>
    <script src="./views/JS/carrossel.js"></script>


</body>

</html>