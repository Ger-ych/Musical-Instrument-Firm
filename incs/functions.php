<?php

function debug($data) {
    echo '<pre>' . print_r($data, 1) . '<pre>';
}

function load($data) {
    foreach($_POST as $k => $v) {
        if(array_key_exists($k, $data)) {
            $data[$k]['value'] = trim($v);
        }
    }
    return $data;
}

function validate($data) {
    $errors = '';

    foreach ($data as $k => $v) {
        if($data[$k]['required'] && empty($data[$k]['value'])) {
            $errors .= "<li>{$data[$k]['field_name']} - обязательное поле!<li>";
        }
    }

    return $errors;
}

function getIp() {
    $keys = [
      'HTTP_CLIENT_IP',
      'HTTP_X_FORWARDED_FOR',
      'REMOTE_ADDR'
    ];
    foreach ($keys as $key) {
      if (!empty($_SERVER[$key])) {
        $ip = trim(end(explode(',', $_SERVER[$key])));
        if (filter_var($ip, FILTER_VALIDATE_IP)) {
          return $ip;
        }
      }
    }
  }

function create_requisition($link, $user_name, $user_phone) {
  $time = date('Y-m-d H:i:s');
  $user_ip = getIp();

  $sql_request = "INSERT INTO `requisitions`(`time`, `user_name`, `user_phone`, `user_ip`) VALUES ('$time','$user_name','$user_phone','$user_ip')";
  return mysqli_query($link, $sql_request);
}
