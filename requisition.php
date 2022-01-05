<?php

    require_once __DIR__ . '/incs/data.php';
    require_once __DIR__ . '/incs/functions.php';
    require_once 'incs/database.php';

    $errors = '';
    $success_msg = '';

    if(!empty($_POST)) {
        //debug($_POST);

        $fields_requisition = load($fields_requisition);
        //debug($fields_requisition);

        if($errors = validate($fields_requisition)) {
            //debug($errors);
        }
        else {
            // Create Requisition in DB
            
            $user_name = $fields_requisition['name']['value'];
            $user_phone = $fields_requisition['phone']['value'];

            $result = create_requisition($link, $user_name, $user_phone);

            if($result) {
                $success_msg = 'Заявка успешно отправлена. Менеджер свяжется с Вами в ближайшее время.';
            }
            else {
                $errors .= "<li>Неизвестная ошибка! Повторите попытку позже.</li>";
            }

            // Send Mail Admin Notifications

            
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- META -->
    <?php require "snippets/head/default_metatags.php" ?>    

    <!-- CSS -->
    <?php require "snippets/head/default_css_connections.php" ?>
    <link rel="stylesheet" href="/static/css/requisition/form.css">

    <!-- JS -->
    <?php require "snippets/head/default_js_connection.php" ?>
    
    <?php require "snippets/head/favicon_link.php" ?>
    <title>Заявка | IMusic</title>
</head>
<body>
    <div class="wrapper">
        <?php require "snippets/header.php" ?>

        <main class="main main-requisition">      
            <div class="col-md-7 col-lg-8 d-flex flex-column">
                <img src="static/img/favicon.jpg" class="mx-auto mb-2" alt="" height="100">
                <h4 class="mb-3 text-center">Оставить заявку IMusic</h4>
                <form class="needs-validation form-requisition" action="" method="POST">
                    <div class="row g-3">
                        <div class="col-12">
                            <label for="name" class="form-label">Имя <span style="color: red">*</span></label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Введите Ваше имя" value="" required="">
                        </div>

                        <div class="col-12">
                            <label for="phone-input" class="form-label">Номер телефона <span style="color: red">*</span></label>
                            <input type="text" id="phone-input" class="form-control" name="phone" placeholder="Введите Ваш номер телефона" value="" required="">
                        </div>
                    </div>

                    <ul class="errors-list">
                        <?php 
                            if($errors) {
                                echo $errors;
                            }
                        ?>
                    </ul>

                    <p class="success-msg">
                        <?php 
                            if($success_msg) {
                                echo $success_msg;
                            }
                        ?>
                    </p>

                    <hr class="my-4">

                    <button class="w-100 btn btn-primary btn-lg" type="submit">Отправить »</button>
                    <p class="pt-2 text-muted text-center"><i class="fas fa-lock"></i> Нажимая кнопку "Отправить »" вы соглашаетесь на обработку персональных данных.</p>
                </form>
            </div>
        </main>
    </div>

    <!-- JS -->
    <?php require "snippets/body/default_js_connection.php" ?>

    <script src="https://unpkg.com/imask"></script>
    <script src="static/js/requisition/mask_phone_input.js"></script>
</body>
</html>