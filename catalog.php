<?php
    // including necessary files
    require_once __DIR__ . '/incs/functions.php';
    require_once 'incs/database.php';

    // getting products from Database
    $products_list = get_products($link);
    
    //debug($products_list);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- META -->
    <?php require "snippets/head/default_metatags.php" ?>    

    <!-- CSS -->
    <?php require "snippets/head/default_css_connections.php" ?>
    <link rel="stylesheet" href="static/css/catalog/product.css">

    <!-- JS -->
    <?php require "snippets/head/default_js_connection.php" ?>
    
    <?php require "snippets/head/favicon_link.php" ?>
    <title>Наша продукция. Музыкальные инструменты в Москве | IMusic</title>
</head>
<body>
    <div class="wrapper">
        <?php require "snippets/header.php" ?>

        <main class="main">
            <div class="album py-5">
                <div class="container">
                    <p class='text-muted mb-4'><i class='fas fa-exclamation-circle'></i> Данная страница предназначена лишь для ознакомления с нашей продукцией. Для того, чтобы приобрести инструмент необходимо оформить заявку и сообщить нужный товар менеджеру.</p>
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                        <?php 
                            // iterating over products
                            foreach ($products_list as $product) {
                                // retrieving product data
                                $id = $product['id'];
                                $name = $product['name'];
                                $short_description = $product['short_description'];
                                $description = $product['description'];
                                $price = $product["price"];
                                $image_url = $product['image_url'];
                                
                                // integration product data into html
                                echo "
                                <div class='col product-block'>
                                    <div class='card shadow-sm'>
                                        <a class='link-modal-product' type='button' data-bs-toggle='modal' data-bs-target='#staticBackdrop$id'></a>

                                        <div class='container-card-image-top'>
                                            <img src='$image_url' class='bd-placeholder-img card-img-top'>
                                        </div><!-- /.container-card-image-top -->
                                        
                                        <div class='card-body'>
                                            <h5>$name</h5>
                                            <p class='card-text'>$short_description</p>
                                            <div class='btn-group w-100'>
                                                <a type='button' data-bs-toggle='modal' data-bs-target='#staticBackdrop$id' class='btn btn-sm w-100 btn-outline-secondary'>Подробнее</a>
                                            </div><!-- /.btn-group -->
                                        </div><!-- /.card-body -->
                                    </div><!-- /.card -->
                                </div>
                                <!-- modal -->
                                <div class='modal fade' id='staticBackdrop$id' data-bs-backdrop='static' data-bs-keyboard='false' tabindex='-1' aria-labelledby='staticBackdropLabel$id' aria-hidden='true'>
                                    <div class='modal-dialog modal-dialog-centered modal-dialog-scrollable'>
                                        <div class='modal-content'>
                                            <div class='modal-header'>
                                                <h4 class='modal-title' id='staticBackdropLabel$id'>$name</h4>
                                                <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                            </div><!-- /.modal-header -->
                                            <div class='modal-body'>
                                                <div class='container-modal-product-image'>
                                                    <img src='$image_url' class='bd-placeholder-img modal-product-image'>
                                                </div><!-- /.container-modal-product-image -->

                                                <h5 class='fw-6'>Описание: </h5>
                                                <p>
                                                    $description
                                                </p>
                                            </div><!-- /.modal-body -->
                                            <div class='modal-footer d-block'>
                                                <div class='d-flex justify-content-between align-items-center'>
                                                    <h5>от ".$price."₽</h5>
                                                    <div class='btn-group'>
                                                        <a type='button' class='btn btn-secondary' data-bs-dismiss='modal'>« Назад</a>
                                                        <a href='requisition.php' type='button' class='btn btn-primary'>Оставить заявку »</a>
                                                    </div><!-- /.btn-group -->
                                                </div><!-- /.d-flex -->
                                            </div><!-- /.modal-footer -->
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->";
                            }
                        ?>
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div>
        </main>
        
        <?php require "snippets/footer.php" ?>
    </div><!-- /.wrapper -->

    <!-- JS -->
    <?php require "snippets/body/default_js_connection.php" ?>
</body>
</html>