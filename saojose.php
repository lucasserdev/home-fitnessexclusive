<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/units.css">
    <link rel="stylesheet" href="css/config.css">
    <script src="js/script.js" defer></script>
    <script src="js/units.js" defer></script>
    <script src="js/config.js" defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>São José</title>
</head>
<body>
    <?php require 'partials/header.php' ?>
    <main class="know-gym">
        <div class="container-know-gym">
            <h2>Unidade</h2>
            <h1></h1>
            <div class="photos-infos">
                <div class="photo-carosel-photo">
                    <div class="photo">
                        <img src="images/units/saojose/amarelo.jpg" alt="">
                    </div>
                    <div class="carosel-photo">
                        <i class="bi bi-arrow-left-square" id="prevBtn"></i>
                        <div class="container-carosel">
                            <img class="active" src="images/units/saojose/amarelo.jpg" alt="">
                            <img src="images/units/saojose/azul.jpg" alt="">
                            <img src="images/units/saojose/black.png" alt="">
                            <img src="images/units/saojose/verde.avif" alt="">
                            <img src="images/units/saojose/vermelho.jpg" alt="">
                            <img src="images/units/saojose/rosa.jpg" alt="">
                        </div>
                        <i class="bi bi-arrow-right-square" id="nextBtn"></i>
                    </div>
                </div>
                <div class="infos">

                    <div class="info">
                        <div class="info-icon">
                            <i class="bi bi-clock"></i>
                        </div>
                        <div class="info-txt">
                            <h1>Horário de funcionamento</h1>
                            <p>Seg a Sex - 5h às 22h <br>
                                Sab/Feriados - 8h às 14h <br>
                                Dom - 9h às 13h
                            </p>
                        </div>
                    </div>

                    <div class="info">
                        <div class="info-icon">
                            <i class="bi bi-geo-alt-fill"></i>
                        </div>
                        <div class="info-txt">
                            <h1>Endereço</h1>
                            <p>Rua Zeca Esmeraldo, 100
                            </p>
                            <a href="https://maps.app.goo.gl/Ym8cJxzXre6rQ6YA6?g_st=aw">Ver no mapa</a>
                        </div>
                    </div>

                    <div class="info">
                        <div class="info-icon">
                            <i class="bi bi-globe"></i>
                        </div>
                        <div class="info-txt">
                            <h1>Faça um tour virtual</h1>
                            <p>Com o tour virtual você consegue conhecer a academia por completo!
                            </p>
                            <a href="#">Fazer um tour</a>
                        </div>
                    </div>
                    <a href="https://evo-totem.w12app.com.br/academiafitnessexclusive/10/site/T9jRsu95eeoqLkTjDOHlwQ%5BEQUAL%5D%5BEQUAL%5D"><button class="sub">Escolho essa aqui!</button>
                    </a>
                </div>
            </div>
        </div>
    </main>
    <?php require 'partials/footer.php' ?>
</body>
</html>