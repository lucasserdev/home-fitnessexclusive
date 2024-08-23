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
    <title>Matriz</title>
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
                            <p>Avenida Antônio de Barros Muniz, 242
                            </p>
                            <a href="https://www.google.com/maps/@-7.5778621,-40.4979269,3a,90y,90.37h,91.59t/data=!3m8!1e1!3m6!1sAF1QipPXghH8W5kBrXTThMzH6_WTpQmE_K37btviYDFJ!2e10!3e12!6s%2F%2Flh5.ggpht.com%2Fp%2FAF1QipPXghH8W5kBrXTThMzH6_WTpQmE_K37btviYDFJ%3Dw900-h600-k-no-pi-1.5900000000000034-ya358.8510028076172-ro0-fo100!7i8002!8i4001?coh=205410&entry=ttu&g_ep=EgoyMDI0MDgyMC4xIKXMDSoASAFQAw%3D%3D">Ver no mapa</a>
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
                            <a href="https://gptour360.com.br/tours/fitnessexclusivematriz">Fazer um tour</a>
                        </div>
                    </div>
                    <a href="https://evo-totem.w12app.com.br/academiafitnessexclusive/3/site/%5BPLUS%5DeIL%5BPLUS%5DfzZNcy7Gt%5BBAR%5DPl5KIrQ%5BEQUAL%5D%5BEQUAL%5D"><button class="sub">Escolho essa aqui!</button>
                    </a>
                </div>
            </div>
        </div>
    </main>
    <?php require 'partials/footer.php' ?>
</body>
</html>