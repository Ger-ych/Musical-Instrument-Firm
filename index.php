<!DOCTYPE html>
<html lang="en">
<head>
    <!-- META -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/static/css/carousel.css">
    <link rel="stylesheet" href="static/css/headers.css">

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <link href="/static/img/favicon.jpg" rel="shortcut icon">
    <title>IMusic</title>
</head>
<body>
    <div class="wrapper">
          
            <nav class="py-2 bg-light border-bottom">
                <div class="container d-flex flex-wrap">
                <ul class="nav me-auto">
                    <li class="nav-item"><a href="#" class="nav-link link-dark px-2 active" aria-current="page">Главная</a></li>
                    <li class="nav-item"><a href="#" class="nav-link link-dark px-2">О нас</a></li>
                    <li class="nav-item"><a href="#" class="nav-link link-dark px-2">Наша продукция</a></li>
                    <li class="nav-item"><a href="#" class="nav-link link-dark px-2">FAQs</a></li>
                    <li class="nav-item"><a href="#" class="nav-link link-dark px-2">About</a></li>
                </ul>
                <ul class="nav">
                    <li class="nav-item"><a href="#" class="nav-link link-dark px-2">Login</a></li>
                    <li class="nav-item"><a href="#" class="nav-link link-dark px-2">Sign up</a></li>
                </ul>
                </div>
            </nav>
            <header class="py-3 mb-4 border-bottom">
                <div class="container d-flex flex-wrap justify-content-center">
                <a href="/" class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto text-dark text-decoration-none">
                    <img src="static/img/favicon.jpg" alt="" height="40">
                    <span class="fs-4">IMusic</span>
                </a>
                <form class="col-12 col-lg-auto mb-3 mb-lg-0">
                    <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
                </form>
                </div>
            </header>
  
            <!--
            <div class="container"> 
             <header>
                <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">IMusic</a>
                        <p>Телефон: +7 (999) 999-99-99</p>
                        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="navbar-collapse collapse" id="navbarCollapse" style="">
                            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="#">О нас</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Наша продукция</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Контакты</a>
                                </li>
                            </ul>
                            <button class="btn btn-primary" type="submit">Оставить заявку</button>
                            <button class="ms-2 btn btn-outline-primary" type="submit">Администрирование</button>
                        </div>
                    </div>
                </nav>
            </header> 
        </div> -->
        <main>
            <div id="myCarousel" class="carousel slide pointer-event" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-label="Slide 1" aria-current="true"></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item">
                        <img class="bd-placeholder-img carousel-bg-image" src="/static/img/carousel/slider_image_1.jpg">

                        <div class="container">
                        <div class="carousel-caption text-start">
                            <h1>Широкий асортимент</h1>
                            <p>У нас широкий асортимент различной музыкальной продукции.</p>
                            <p><a class="btn btn-lg btn-primary" href="#">Подробнее »</a></p>
                        </div>
                        </div>
                    </div>
                    <div class="carousel-item active">
                        <img class="bd-placeholder-img carousel-bg-image" src="/static/img/carousel/slider_image_2.jpg">

                        <div class="container">
                        <div class="carousel-caption">
                            <h1>IMusic - фирма музыкальных инструметов.</h1>
                            <p></p>
                            <p><a class="btn btn-lg btn-primary" href="#">Подробнее »</a></p>
                        </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="bd-placeholder-img carousel-bg-image" src="/static/img/carousel/slider_image_3.jpg">

                        <div class="container">
                        <div class="carousel-caption text-end">
                            <h1>Возможность оставить заявку Онлайн</h1>
                            <p>Вы можете оставить заявку прямо сейчас, и менеджер свяжется с вами в ближайшее время.</p>
                            <p><a class="btn btn-lg btn-primary" href="#">Оставить заявку »</a></p>
                        </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>

                <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>


            <!-- Marketing messaging and featurettes
            ================================================== -->
            <!-- Wrap the rest of the page in another container to center all the content. -->

            <div class="container marketing">

                <!-- Three columns of text below the carousel -->
                <div class="row headers">
                    <div class="col-lg-4">
                        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>

                        <h2>Heading</h2>
                        <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
                        <p><a class="btn btn-secondary" href="#">View details »</a></p>
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>

                        <h2>Heading</h2>
                        <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second column.</p>
                        <p><a class="btn btn-secondary" href="#">View details »</a></p>
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>

                        <h2>Heading</h2>
                        <p>And lastly this, the third column of representative placeholder content.</p>
                        <p><a class="btn btn-secondary" href="#">View details »</a></p>
                    </div><!-- /.col-lg-4 -->
                </div><!-- /.row -->


                <!-- START THE FEATURETTES -->

                <hr class="featurette-divider">

                <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It’ll blow your mind.</span></h2>
                    <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting prose here.</p>
                </div>
                <div class="col-md-5">
                    <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"></rect><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>

                </div>
                </div>

                <hr class="featurette-divider">

                <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading">Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span></h2>
                    <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
                </div>
                <div class="col-md-5 order-md-1">
                    <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"></rect><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>

                </div>
                </div>

                <hr class="featurette-divider">

                <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
                    <p class="lead">And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better view of what this would look like with some actual content. Your content.</p>
                </div>
                <div class="col-md-5">
                    <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"></rect><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>

                </div>
                </div>

                <hr class="featurette-divider">

                <!-- /END THE FEATURETTES -->

            </div><!-- /.container -->


            <!-- FOOTER -->
            <footer class="container">
                <p class="float-end"><a href="#">Back to top</a></p>
                <p>© 2017–2021 Company, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
            </footer>
        </main>
    </div>
</body>
</html>