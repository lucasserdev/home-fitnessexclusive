<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/units.css">
    <script src="js/script.js" defer></script>
    <script src="js/units.js" defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Unidades | Fitness Exclusive</title>
</head>
<body>
    <?php include 'partials/header.php' ?>

    <div class="icon-whats">
        <a href="google.com"><i class="bi bi-whatsapp"></i></a>
    </div>

    <section class="banner">
        <img src="images/choose-gym.jpeg" alt="">
    </section>
    
    <section class="search">
        <label for="gym">
            Em qual cidade você deseja treinar?
        </label>
        <input type="text" name="" id="gym" placeholder="Digite aqui sua cidade ou bairro"> 
        <i class="bi bi-search" id="search"></i>
    </section>

    <div class="count-units">
        <span class="count">-</span>Unidades encontradas
    </div>

    <!-- MODELO PARA GERAR UNIDADES -->

    <div class="unit" data-city="" data-bairro="" style="display: none;">
        <img src="images/bg-fitness.jpg" alt="">
        <div class="info">
            <h4>-</h4>
            <p>-</p>
            <a href="" class="see-gym">Conhecer Academia</a>
            <p class="time">-</p>
            <a href="" class="see-plan"><button class="btn-plan">Ver Planos</button></a>
        </div>
    </div>

    <main class="choose-units">
        <button class="open-filter-mobile" style="display: none;">
            <i class="bi bi-filter-square"></i> Filtros
        </button>
        <div class="container">
            <div class="filters">
                <h3>Aplicar Filtros</h3>
               
                <div class="input-filters">

                    <div class="select-filter">
                        <input type="checkbox" name="" id="promo" value="promocao">
                        <label for="promo">Promoção</label>
                    </div>
                    
                    <div class="select-filter">
                        <input type="checkbox" name="" id="mc" value="cadeira massageadora">
                        <label for="mc">Cadeira Massageadora</label>
                    </div>

                    <div class="select-filter">
                        <input type="checkbox" name="" id="fisio" value="fisioterapia">
                        <label for="fisio">Fisioterapia</label>
                    </div>

                    <div class="select-filter">
                        <input type="checkbox" name="" id="pila" value="pilates">
                        <label for="pila">Pilates</label>
                    </div>

                    <button class="appy-filter">Filtrar</button>
                    
                </div>
            </div>
            <div class="units">

                
            </div>
        </div>
    </main>




    <?php include 'partials/footer.php' ?>
    
</body>
</html>