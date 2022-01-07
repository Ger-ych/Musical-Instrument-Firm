<?php
    // including necessary files
    require_once __DIR__ . '/incs/data.php';
    require_once __DIR__ . '/incs/functions.php';
    require_once 'incs/database.php';

    // assigning default values to form notification variables
    $errors = '';
    $success_msg = '';

    // check for POST request
    if(!empty($_POST)) {
        //debug($_POST);

        // getting an empty form object
        $fields_requisition = load($fields_requisition);
        
        //debug($fields_requisition);

        // form validation
        if($errors = validate($fields_requisition)) {
            //debug($errors);
        }
        else {
            // create requisition in Database
            
            $user_name = $fields_requisition['name']['value'];
            $user_phone = $fields_requisition['phone']['value'];

            $result = create_requisition($link, $user_name, $user_phone);

            // send mail notifications
            
            $subject = "=?utf-8?B?".base64_encode("Поступила заявка от пользователя | IMusic")."?=";

            $message = "Пользователь просит с ним связаться: \n Имя пользователя: $user_name; \n Номер телефона: $user_phone; \n IP-адрес пользователя: ".getIp()."; \n ";
            $headers = "From: imusic\r\nReply-to: IMusic\r\nContent-type: text/plain; charset=utf-8\r\n";
            
            foreach ($notification_emails as $to) {
                mail($to, $subject, $message, $headers);
            }
  
            // verification of successful entry of the requisition into the Database
            if($result) {
                $success_msg = 'Заявка успешно отправлена. Менеджер свяжется с Вами в ближайшее время.';
            }
            else {
                $errors .= "<li>Неизвестная ошибка! Повторите попытку позже.</li>";
            }
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
                        </div><!-- /.сщд-12 -->

                        <div class="col-12">
                            <label for="phone-input" class="form-label">Номер телефона <span style="color: red">*</span></label>
                            <input type="text" id="phone-input" class="form-control" name="phone" placeholder="Введите Ваш номер телефона" value="" required="">
                        </div><!-- /.сщд-12 -->
                    </div><!-- /.row -->

                    <ul class="errors-list">
                        <?php 
                            // form error output
                            if($errors) {
                                echo $errors;
                            }
                        ?>
                    </ul>

                    <p class="success-msg">
                        <?php 
                            // outputting a successful form notification
                            if($success_msg) {
                                echo $success_msg;
                            }
                        ?>
                    </p>

                    <hr class="my-4">

                    <button class="w-100 btn btn-primary btn-lg" type="submit">Отправить »</button>
                    <p class="pt-2 text-muted text-center"><i class="fas fa-lock"></i> Нажимая кнопку "Отправить »" вы соглашаетесь на обработку персональных данных.</p>
                </form>
            </div><!-- /.col-md-7 -->
        </main>
    </div><!-- /.wrapper -->

    <!-- JS -->
    <?php require "snippets/body/default_js_connection.php" ?>

    <script src="https://unpkg.com/imask"></script>
    <script src="static/js/requisition/mask_phone_input.js"></script>
</body>
</html>