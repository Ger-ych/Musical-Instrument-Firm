<!DOCTYPE html>
<html lang="en">
<head>
    <!-- META -->
    <?php require "snippets/head/default_metatags.php" ?>

    <!-- CSS -->
    <?php require "snippets/head/default_css_connections.php" ?>

    <link rel="stylesheet" href="static/css/carousel.css">
    <link rel="stylesheet" href="static/css/headers.css">
    <link rel="stylesheet" href="static/css/featurettes.css">

    <!-- JS -->
    <?php require "snippets/head/default_js_connection.php" ?>

    <?php require "snippets/head/favicon_link.php" ?>
    <title>Продажа музыкальных инструментов и другой подобной продукции в Москве. Доставка по всей России! | IMusic</title>
</head>
<body>
    <div class="wrapper">
        <?php require "snippets/header.php" ?>

        <main class="main">
            <div id="myCarousel" class="carousel slide pointer-event" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-label="Slide 1" aria-current="true"></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
                </div><!-- /.carousel-indicators -->
                
                <div class="carousel-inner">
                    <div class="carousel-item">
                        <img class="bd-placeholder-img carousel-bg-image" src="/static/img/carousel/slider_image_1.jpg">

                        <div class="container">
                            <div class="carousel-caption text-start">
                                <h1>Широкий асортимент</h1>
                                <p>У нас широкий асортимент различной музыкальной продукции.</p>
                                <p><a class="btn btn-lg btn-primary" href="/catalog.php">Подробнее »</a></p>
                            </div><!-- /.carousel-caption -->
                        </div><!-- /.container -->
                    </div><!-- /.carousel-item -->

                    <div class="carousel-item active">
                        <img class="bd-placeholder-img carousel-bg-image" src="/static/img/carousel/slider_image_2.jpg">

                        <div class="container">
                            <div class="carousel-caption">
                                <h1>IMusic - фирма по продаже музыкальных инструментов.</h1>
                                <p></p>
                                <p><a class="btn btn-lg btn-primary" href="/about.php">Подробнее »</a></p>
                            </div><!-- /.carousel-caption -->
                        </div><!-- /.container -->
                    </div><!-- /.carousel-item -->
                    
                    <div class="carousel-item">
                        <img class="bd-placeholder-img carousel-bg-image" src="/static/img/carousel/slider_image_3.jpg">

                        <div class="container">
                            <div class="carousel-caption text-end">
                                <h1>Возможность оставить заявку Онлайн</h1>
                                <p>Вы можете оставить заявку прямо сейчас, и менеджер свяжется с вами в ближайшее время.</p>
                                <p><a class="btn btn-lg btn-primary" href="#">Оставить заявку »</a></p>
                            </div><!-- /.carousel-caption -->
                        </div><!-- /.container -->
                    </div><!-- /.carousel-item -->
                </div><!-- /.carousel-inner -->
                <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>

                <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div><!-- /.carousel -->


            <!-- Marketing messaging and featurettes
            ================================================== -->
            <!-- Wrap the rest of the page in another container to center all the content. -->

            <div class="container marketing">

                <!-- Three columns of text below the carousel -->
                <div class="row headers">
                    <div class="col-lg-4">
                        <img src="static/img/headers/headers_img_1.png" class="bd-placeholder-img rounded-circle" width="140" height="140">

                        <h2>Низкая цена</h2>
                        <p>Мы закупаем товары напрямую у поставщика или производим сами во избежание наценок от посредников.</p>
                        <p><a class="btn btn-secondary" href="/about.php">Подробнее »</a></p>
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <img src="static/img/headers/headers_img_2.png" class="bd-placeholder-img rounded-circle" width="140" height="140">

                        <h2>Гарантия качества</h2>
                        <p>Мы всегда следим за качесвом продукции и проверяем каждый инструмент.</p>
                        <p><a class="btn btn-secondary" href="/about.php">Подробнее »</a></p>
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <img src="static/img/headers/headers_img_3.png" class="bd-placeholder-img rounded-circle" width="140" height="140">

                        <h2>Доставка</h2>
                        <p>Мы доставляем продукцию по всей России в фирменных безопасных кейсах.</p>
                        <p><a class="btn btn-secondary" href="/about.php">Подробнее »</a></p>
                    </div><!-- /.col-lg-4 -->
                </div><!-- /.row -->


                <!-- START THE FEATURETTES -->

                <hr class="featurette-divider">

                <div class="row featurette">
                    <div class="col-md-7">
                        <h2 class="featurette-heading">Мы не против сотрудничества.<br /><span class="text-muted">С нами выгодно.</span></h2>
                        <p class="lead">Мы постоянно ищем новых поставщиков музыкальных инструментов и других товаров. Свяжитесь с нами для получения выгодной сделки поставки продукции.</p>
                    </div><!-- /.col-md-7 -->

                    <div class="col-md-5">
                        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="static/img/featurettes/featurette_img_1.jpg">

                    </div><!-- /.col-md-5 -->
                </div><!-- /.featurette -->

                <hr class="featurette-divider">

                <div class="row featurette">
                    <div class="col-md-7 order-md-2">
                        <h2 class="featurette-heading">Нам нужны новые клиенты. <span class="text-muted">Скидка за приглашённых друзей.</span></h2>
                        <p class="lead">Если Вы приглашаете друзей к нам, то мы в свою очередь делаем вам скидку на следующие покупки. А также если Вы являетесь потенциальным постянным клиентом, например образовательным учреждением, то у Вас есть возможность выгодного сотрудничесва с нами.</p>
                    </div><!-- /.col-md-7 -->

                    <div class="col-md-5 order-md-1">
                        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="static/img/featurettes/featurette_img_2.png">

                    </div><!-- /.col-md-5 -->
                </div><!-- /.featurette -->

                <hr class="featurette-divider">

                <div class="row featurette">
                    <div class="col-md-7">
                        <h2 class="featurette-heading">Контакты</h2>
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

                <hr class="featurette-divider">

                <!-- /END THE FEATURETTES -->

            </div><!-- /.container -->
        </main>
        
        <?php require "snippets/footer.php" ?>
    </div>
    
    <!-- JS -->
    <?php require "snippets/body/default_js_connection.php" ?>
    
    <script src="static/js/set_carousel_height.js"></script>
</body>
</html>