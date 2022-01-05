<!DOCTYPE html>
<html lang="en">
<head>
    <!-- META -->
    <?php require "snippets/head/default_metatags.php" ?>    

    <!-- CSS -->
    <?php require "snippets/head/default_css_connections.php" ?>
    <link rel="stylesheet" href="static/css/index/featurettes.css">

    <!-- JS -->
    <?php require "snippets/head/default_js_connection.php" ?>
    
    <?php require "snippets/head/favicon_link.php" ?>
    <title>Контакты | IMusic</title>
</head>
<body>
    <div class="wrapper">
        <?php require "snippets/header.php" ?>

        <main class="main">
            <div class="container px-4 py-5" id="custom-cards">
            <h2 class="pb-2 border-bottom">Мы в социальных сетях</h2>

            <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
                <div class="col">
                    <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg">
                        <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                            <h3 class="pt-5 mt-5 mb-4  lh-1 fw-bold">Мы активно ведём социальные сети</h3>
                            <ul class="d-flex list-unstyled mt-auto">
                                <li class="me-auto">
                                    <img src="static/img/contacts/socialn_seti.jpg" alt="Bootstrap" class="rounded-circle border border-white" width="32" height="32">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg">
                        <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                            <h3 class="pt-5 mt-5 mb-4 lh-1 fw-bold">Следите за нашими новостями, чтобы не пропустить самые лучшие скидки.</h3>
                            <ul class="d-flex list-unstyled mt-auto">
                                <li class="me-auto">
                                    <img src="static/img/contacts/socialn_seti.jpg" alt="Bootstrap" class="rounded-circle border border-white" width="32" height="32">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg">
                        <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
                            <h3 class="pt-5 mt-5 mb-4 lh-1 fw-bold">Ссылки на наши социальные сети Вы можете увидеть внизу страницы в подвале сайта.</h3>
                            <ul class="d-flex list-unstyled mt-auto">
                                <li class="me-auto">
                                    <img src="static/img/contacts/socialn_seti.jpg" alt="Bootstrap" class="rounded-circle border border-white" width="32" height="32">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="b-example-divider"></div>

            <div class="container px-4 py-5" id="icon-grid">
                <h2 class="pb-2 border-bottom">Контакты</h2>
                <a class="fs-5" style="text-decoration: underline; cursor: pointer;" <?php require "snippets/legal_information/attr_btn.php" ?>>Юридическая информация компании IMusic</a>

                <!-- Modal Legal Information -->
                <?php require "snippets/legal_information/modal.php" ?>
                
                <div class="row featurette">
                    <div class="col-md-7">
                        <br />
                        <p class="lead">Если Вы живёте в Москве, Вы можете прийти к нам в офис и оформить заказ там. Также все предложения и пожелаения могут быть приняты по телефону, почте или вживую в нашем офисе.</p>
                        <br />
                        <div class="featurette-contants">
                            <p class="featurette-contants-phone"><a href="tel:+79999999999"><i class="fas fa-phone"></i> +7 (999) 999-99-99</a></p>
                            <p class="featurette-contants-email"><a href="mailto:email@mail.ru"><i class="fas fa-envelope-square"></i> email@mail.ru</a></p>
                            <p class="featurette-contants-address"><i class="fas fa-map-marker-alt"></i> Москва, Россия, улица Шаболовка, 40</p>
                        </div>
                    </div><!-- /.col-md-7 -->

                    <div class="col-md-5">
                        <iframe class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid" style="height: 500px!important" src="https://yandex.ru/map-widget/v1/?um=constructor%3A6479faaaebf9f1ec161d3955ad02a1a91ae0b1598bd9891aba0580cb4fe54b6b&amp;source=constructor" width="500" height="500" frameborder="0"></iframe>
                    </div><!-- /.col-md-5 -->
                </div><!-- /.featurette -->
            </div>
        </main>
        
        <?php require "snippets/footer.php" ?>
    </div>

    <!-- JS -->
    <?php require "snippets/body/default_js_connection.php" ?>
</body>
</html>