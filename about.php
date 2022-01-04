<!DOCTYPE html>
<html lang="en">
<head>
    <!-- META -->
    <?php require "snippets/head/default_metatags.php" ?>    

    <!-- CSS -->
    <?php require "snippets/head/default_css_connections.php" ?>

    <!-- JS -->
    <?php require "snippets/head/default_js_connection.php" ?>
    
    <?php require "snippets/head/favicon_link.php" ?>
    <title>О нас | IMusic</title>
</head>
<body>
    <div class="wrapper">
        <?php require "snippets/header.php" ?>

        <main class="main container">
            <div class="p-5 mb-4 bg-light rounded-3">
                <a class="fs-5" style="text-decoration: underline;" href="">Юридическая информация компании IMusic</a>
                <div class="container-fluid py-5">
                    <h1 class="display-5 fw-bold">IMusic - фирма по продаже музыкальных инструментов</h1>
                    <p class="col-md-8 fs-4">IMusic - компания по производству, продаже и перепродаже от популярных поставщиков музыкальных инструментов и подобной продукции. Мы одни из лидеров в этой области с многолетним стажем. С нами просто и выгодно!</p>    
                    <a href="/requisition.php" class="btn btn-primary btn-lg" type="button">Оставить заявку »</a>
                </div>
            </div>

            <div class="row align-items-md-stretch">
                <div class="col-md-6">
                    <div class="h-100 p-5 text-white bg-dark rounded-3">
                    <h2>Доставка и Оплата</h2>
                    <p>У нас вы можете оформить заказ у менеджера, связавшись с нами по контактам, указанным на сайте. Также вы можете просмотреть цены на наши товары в соответсвующем разделе и <a href="#">оставить заявку</a>. Мы доставляем заказы по всей России. Остались вопросы? Свяжитесь с нами.</p>
                    <a href="/catalog.php" class="btn btn-outline-light" type="button">Наша продукция »</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="h-100 p-5 bg-light border rounded-3">
                    <h2>Реферальная программа и сотрудничество</h2>
                    <p>При приглашении Вами друзей делаем вам скидку на первые покупки. Мы всегда заинтересованы в предложениях о сотрудничестве. Если Вы поставщик соответсвующей нам продукции, Вы можете связаться с нами для обсуждения всех условий сделки и оформления договора. Если же Вы являетесь нашим постоянным клиентом, то при оформелнии заказа сообщите об этом менеджеру. Для постоянных клиентов действует скидка на все последующие покупки. Все предложения, пожелания и заказы можно сделать, <a href="#">оставив заявку</a>, <a href="tel:+79999999999">по номеру телефона</a>, <a href="mailto:email@mail.ru">по электронной почте</a> и вживую в нашем офисе.</p>
                    <button class="btn btn-outline-secondary" type="button">Контакты »</button>
                    </div>
                </div>
            </div>

            <hr class="my-5">
        </main>
        
        <?php require "snippets/footer.php" ?>
    </div>

    <!-- JS -->
    <?php require "snippets/body/default_js_connection.php" ?>
</body>
</html>