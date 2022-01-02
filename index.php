<!DOCTYPE html>
<html lang="en">
<head>
    <!-- META -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="static/css/global.css">
    <link rel="stylesheet" href="static/css/header.css">
    <link rel="stylesheet" href="static/css/footer.css">
    <link rel="stylesheet" href="static/css/carousel.css">
    <link rel="stylesheet" href="static/css/headers.css">
    <link rel="stylesheet" href="static/css/featurettes.css">

    <!-- JS -->
    <script src="https://kit.fontawesome.com/d4c10ee18e.js" crossorigin="anonymous"></script>

    <link href="/static/img/favicon.jpg" rel="shortcut icon">
    <title>IMusic</title>
</head>
<body>
    <div class="wrapper">
        <nav class="py-2 bg-light border-bottom top-header">
            <div class="container d-flex flex-wrap">
            <ul class="nav me-auto">
                <li class="nav-item"><a href="tel:+79999999999" class="nav-link link-dark px-2">+7 (999) 999-99-99</a></li>
            </ul>
            <ul class="nav me-auto">
                <li class="nav-item"><a href="mailto:email@mail.ru" class="nav-link link-dark px-2">email@mail.ru</a></li>
            </ul>
            </div>
        </nav>
        <header class="p-3 mb-3 border-bottom bot-header">
            <div class="container">
                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                    <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
                        <img src="static/img/favicon.jpg" alt="" height="40">
                    </a>

                    <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="#" class="nav-link px-2 link-dark">О нас</a></li>
                    <li><a href="#" class="nav-link px-2 link-dark">Наша продукция</a></li>
                    <li><a href="#" class="nav-link px-2 link-dark">Контакты</a></li>
                    </ul>
                    
                    <button class="btn btn-primary" type="submit">Оставить заявку</button>
                    <button class="mx-2 btn btn-outline-primary" type="submit">Администрирование</button>
                </div>
            </div>
        </header>
        <main>
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
                                <p><a class="btn btn-lg btn-primary" href="#">Подробнее »</a></p>
                            </div><!-- /.carousel-caption -->
                        </div><!-- /.container -->
                    </div><!-- /.carousel-item -->

                    <div class="carousel-item active">
                        <img class="bd-placeholder-img carousel-bg-image" src="/static/img/carousel/slider_image_2.jpg">

                        <div class="container">
                            <div class="carousel-caption">
                                <h1>IMusic - фирма музыкальных инструметов.</h1>
                                <p></p>
                                <p><a class="btn btn-lg btn-primary" href="#">Подробнее »</a></p>
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
                        <p>Мы закупаем товары напрямую у поставщика во избежание наценок от посредников.</p>
                        <p><a class="btn btn-secondary" href="#">Подробнее »</a></p>
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <img src="static/img/headers/headers_img_2.png" class="bd-placeholder-img rounded-circle" width="140" height="140">

                        <h2>Гарантия качества</h2>
                        <p>Мы всегда следим за качесвом продукции и проверяем каждый инструмент.</p>
                        <p><a class="btn btn-secondary" href="#">Подробнее »</a></p>
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <img src="static/img/headers/headers_img_3.png" class="bd-placeholder-img rounded-circle" width="140" height="140">

                        <h2>Доставка</h2>
                        <p>Мы доставляем продукцию по всей России в фирменных безопасных сейфах.</p>
                        <p><a class="btn btn-secondary" href="#">Подробнее »</a></p>
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
                        <p class="lead">Если Вы приглашаете друзей к нам, то мы в свою очередь делаем скидку им и Вам на следующие покупки. А также если Вы являетесь потенциальным постянным клиентом, например образовательным учреждением, то у Вас есть возможность выгодного сотрудничесва с нами.</p>
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

            <footer class="site-footer">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-sm-12 col-md-6">
                            <h6>О нас</h6>
                            <p class="text-justify">IMusic - компания по продаже и перепродаже от популярных поставщиков музыкальных инструментов и подобной продукции. Мы одни из лидеров в этой области с многолетним стажем. С нами просто и выгодно!</p>
                        </div><!-- /.col-md-6 -->

                        <div class="col-xs-6 col-md-3">
                            <h6>Карта сайта</h6>
                            <ul class="footer-links">
                            <li><a href="">О нас</a></li>
                            <li><a href="">Контакты</a></li>
                            <li><a href="">Наша продукция</a></li>
                            <li><a href="">Оставить заявку</a></li>
                            <li><a href="">Юридическая информация</a></li>
                            </ul>
                        </div><!-- /.col-md-3 -->
                    </div><!-- /.row -->
                    <hr>
                </div><!-- /.container -->

                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-sm-6 col-xs-12">
                            <p class="copyright-text">&copy; 2017–2021 IMusic, Inc. Москва, Россия, улица Шаболовка, 40.</a>
                            </p>
                        </div><!-- /.col-md-8 -->

                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <ul class="social-icons">
                            <li><a class="facebook" href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a class="twitter" href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a class="instagram" href="#" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                            <li><a class="vkontakte" href="#" title="VK"><i class="fa fa-vk"></i></a></li>   
                            </ul>
                        </div><!-- /.col-md-4 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </footer>
        </main>
    </div>
    
    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/c3a3b0ff12.js"></script>
    
    <script src="static/js/set_carousel_height.js"></script>
</body>
</html>