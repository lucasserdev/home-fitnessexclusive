<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="js/script.js" defer></script>
    <title>Fitness Exclusive</title>
</head>
<body>
    <?php include 'partials/header.php' ?>

    <div class="icon-whats">
        <a href="google.com"><i class="bi bi-whatsapp"></i></a>
    </div>

    <!-- SEÇÃO DE IMAGEM DE ALGUMA PROMOÇÃO -->

    <section class="offer">

        <div class="img-offer">
        <picture>
            <source media="(min-width: 450px)" srcset="images/promo-desktop.webp">
            <img src="images/promo-mobile.jpg" alt="Promoção">
        </picture>
        </div>

    </section>

    <section class="choose-gym" id="choose-gym">

        <h1>Escolha sua <span>academia</span></h1>
        <div class="img-choose-gym">
            <a href="units.php">
                <button id="gyms">Escolher Academia <i class="bi bi-search"></i>
                </button>
            </a>
        </div>

    </section>

    <section class="plans" id="plans">

        <div class="container-plans">
            <h1>Seja Fitness na melhor academia do <br> <span>Nordeste</span></h1>
            <p>As Melhores unidades com equipamentos mais modernos.
            </p>
            <table>
                <thead>
                    <tr>
                        <th></th>
                        <th>Crédito</th>
                        <th>Recorrente</th>
                        <th><i class="bi bi-cash-coin"></i>Plano +</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Leve 5 amigos por mês para
                        treinar com você
                        </td>
                        <td><i class="bi bi-check-circle yellow"></i></td>
                        <td><i class="bi bi-x"></i></td>
                        <td><i class="bi bi-x"></i></td>
                    </tr>

                    <tr>
                        <td>Cadeira de massagem*</td>
                        <td><i class="bi bi-x"></i></td>
                        <td><i class="bi bi-x"></i></td>
                        <td><i class="bi bi-check-circle yellow"></i></td>
                    </tr>

                    <tr>
                        <td>APP de Treino</td>
                        <td><i class="bi bi-check-circle yellow"></i></td>
                        <td><i class="bi bi-check-circle yellow"></td>
                        <td><i class="bi bi-x"></i></td>
                    </tr>

                    <tr>
                        <td>Área de musculação e aeróbicos</td>
                        <td><i class="bi bi-check-circle yellow"></i></td>
                        <td><i class="bi bi-check-circle yellow"></td>
                        <td><i class="bi bi-x"></i></td>
                    </tr>

                    <tr>
                        <td>Aulas coletivas e de dança*</td>
                        <td><i class="bi bi-x"></i></td>
                        <td><i class="bi bi-x"></i></td>
                        <td><i class="bi bi-check-circle yellow"></td>
                    </tr>

                    <tr>
                        <td>Acesso a todas as unidades*</td>
                        <td><i class="bi bi-x"></i></td>
                        <td><i class="bi bi-x"></i></td>
                        <td><i class="bi bi-check-circle yellow"></td>
                    </tr>

                    <tr>
                        <td>Massagem com fisioterapeuta</td>
                        <td><i class="bi bi-check-circle yellow"></td>
                        <td><i class="bi bi-x"></i></td>
                        <td><i class="bi bi-x"></i></td>
                    </tr>

                    <tr>
                        <td>Acesso 7 dias por semana</td>
                        <td><i class="bi bi-check-circle yellow"></td>
                        <td><i class="bi bi-check-circle yellow"></td>
                        <td><i class="bi bi-x"></i></td>
                    </tr>

                </tbody>
                
            </table>

            <div class="btn-choose-plan">
                <p>*Os planos e valores podem mudar de acordo com a unidade escolhida.
                </p>
                <button class="start-plan"><a href="units.php">Começar Agora</a>
                </button>
            </div>

            <div class="choose-plans">
                <div class="plan-type">
                    <i class="bi bi-credit-card"></i>
                    <h2>Plano Crédito</h2>
                    Leve 5 amigos por mês para treinar com você <br>
                    APP de Treino <br>
                    Área de musculação e aeróbicos <br>
                    Massagem com fisioterapeuta <br>
                    Acesso 7 dias por semana <br>
                    <button class="start-plan"><a href="units.php">Começar Agora</a></button>
                </div>
                <div class="plan-type">
                    <i class="bi bi-award-fill"></i>
                    <h2>Plano Recorrente</h2>
                    APP de Treino <br>
                    Área de musculação e aeróbicos <br>
                    Acesso 7 dias por semana <br>
                    <button class="start-plan"><a href="units.php">Começar Agora</a></button>
                </div>
                <div class="plan-type">
                    <i class="bi bi-cash-coin"></i>
                    <h2>Plano +</h2>
                    Cadeira de massagem*<br>
                    Aulas coletivas e de dança* <br>
                    Acesso a todas as unidades <br>
                    <button class="start-plan"><a href="units.php">Começar Agora</a></button>
                </div>
            </div>
        </div>

    </section>

    <section class="insta" id="insta">
        <div class="container-insta">
            <h1>SIGA NOSSO <span>INSTAGRAM</span></h1>
            <a href="#">
                <p>@fitnessexclusive</p>
            </a>
            <a href="#">
                <iframe src="https://snapwidget.com/embed/1076514" class="snapwidget-widget" allowtransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; height: 100px;" title="teste">
                </iframe>
            </a>
        </div>
    </section>

    <section class="about-us" id="about-us">
        <div class="container-about-us">
            <h1>Missão, visão, valores e <span>nossa história</span>
            </h1>
            <div class="mission">
                <div class="bg-shadow"></div>
                <div class="txt">
                    <h1>Lorem ipsum.</h1>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum porro error quaerat minus quae atque quisquam laboriosam inventore ab fugit aliquid suscipit velit debitis corrupti, molestias, omnis dolores mollitia! Beatae, inventore. Eveniet similique dolor error officia modi corrupti quidem esse laudantium debitis deserunt iure unde sunt sequi doloremque non ad, labore, mollitia, commodi rerum repellendus! Sapiente, similique in id quod, omnis aut ullam quibusdam illum dignissimos exercitationem, beatae optio temporibus! Qui ipsam vitae consectetur. Commodi dolorum beatae optio, vel deleniti sit sapiente temporibus. Sunt facere, corporis accusamus id adipisci ipsa obcaecati nobis quia ab, quae animi hic? Unde, ullam perferendis.
                    </p>
                </div>
            </div>
        </div>

        <div class="ceos">
            <div class="ceo">
                <div class="bio-one">
                    <img src="images/ceo1.webp" alt="">
                    <div class="bio-txt">
                        <h2>Diretor, Ceo / Fundador</h2>
                        <h1>Leandro Batista</h1>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. In itaque, officia amet unde ipsum cum quae cupiditate vel deserunt minima numquam quod nesciunt corporis molestias consectetur qui laboriosam ad perferendis ex hic nobis! Quam iusto quibusdam reprehenderit totam sit, nam expedita sequi dolores vel veniam dolorum delectus ipsum alias ratione minima id mollitia assumenda autem. Deleniti ratione, ducimus a vero hic eos sit labore numquam! Consequuntur vero odit amet enim quaerat nobis omnis adipisci incidunt? Quo, est magnam! Quas, sint aut, cupiditate consequuntur odio ipsum perspiciatis quidem sunt nam eligendi magni soluta ducimus tempora. Nemo quod nostrum earum! Sint, eveniet.</p>
                    </div>
                </div>
            </div>
            
            <div class="ceo">
                <div class="bio-two">
                        <img src="images/ceo2.webp" alt="">
                        <div class="bio-txt">
                            <h2>Diretor, Ceo / Fundador</h2>
                            <h1>Erick Coelho</h1>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. In itaque, officia amet unde ipsum cum quae cupiditate vel deserunt minima numquam quod nesciunt corporis molestias consectetur qui laboriosam ad perferendis ex hic nobis! Quam iusto quibusdam reprehenderit totam sit, nam expedita sequi dolores vel veniam dolorum delectus ipsum alias ratione minima id mollitia assumenda autem. Deleniti ratione, ducimus a vero hic eos sit labore numquam! Consequuntur vero odit amet enim quaerat nobis omnis adipisci incidunt? Quo, est magnam! Quas, sint aut, cupiditate consequuntur odio ipsum perspiciatis quidem sunt nam eligendi magni soluta ducimus tempora. Nemo quod nostrum earum! Sint, eveniet.</p>
                        </div>
                    </div>
                </div>
        </div>
       
    </section>

    <section class="work-with-us" id="work-with-us">
        <h1>Trabalhe <span>conosco</span></h1>
        <div class="container-work">
            
            <div class="txt-work">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor esse et dolore officiis voluptas fugit quibusdam adipisci illum quos sed.</p>
                <a href="work-withus.php"><button>Trabalhe Conosco</button></a>
            </div>
            <div class="img-work">
                <img src="images/img-work.webp" alt="">
            </div>
        </div>
    </section>

    <section class="app" id="app">
        <div class="img-main">
            <img src="images/app-desktop.png" alt="">
        </div>

        <div class="app-mobile">
            <div class="app-txt">
                <h2>Confira o App academia</h2>
                <h1>Fitness Exclusive</h1>
                <h3>Aqui você tem acesso a:</h3>
                <p><i class="bi bi-check-lg"></i> Seus Treinos;</p>
                <p><i class="bi bi-check-lg"></i> Planos e serviços;</p>
                <p><i class="bi bi-check-lg"></i> Contato</p>
                <p><i class="bi bi-check-lg"></i> Pagamento</p>
                <h4>Sem pagar nada a mais</h4>
            </div>
            
            <div class="img-mobile">
                <img src="images/app-mobile.png" alt="">
            </div>
        </div>

    </section>

    <?php include 'partials/footer.php' ?>

    <script src="https://snapwidget.com/js/snapwidget.js"></script> 
</body>
</html>