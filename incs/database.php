<?php

$link = mysqli_connect('localhost', 'root', '', 'musicalinstrumentfirm');

if(mysqli_connect_errno()) {
    echo 'Ошибка в подключении к БД MySQL ('.mysqli_connect_errno().'): '. mysqli_connect_error();
    exit();
}
