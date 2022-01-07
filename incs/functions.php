<?php

// Function for outputting data for convenient application debugging
function debug($data) {
    echo '<pre>' . print_r($data, 1) . '<pre>';
}

// A function to get a form object from a POST request
function load($data) {
    foreach($_POST as $k => $v) {
        if(array_key_exists($k, $data)) {
            $data[$k]['value'] = trim($v);
        }
    }
    return $data;
}

// This function validates the data of the form object according to the validation conditions specified in this object
function validate($data) {
    $errors = '';

    foreach ($data as $k => $v) {
        if($data[$k]['required'] && empty($data[$k]['value'])) {
            $errors .= "<li>{$data[$k]['field_name']} - обязательное поле!<li>";
        }
    }

    return $errors;
}

// Function for getting the user's IP-address
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

// This function automates the process of creating an requisition in the Database
function create_requisition($link, $user_name, $user_phone) {
  $time = date('Y-m-d H:i:s');
  $user_ip = getIp();

  $sql_request = "INSERT INTO `requisitions`(`time`, `user_name`, `user_phone`, `user_ip`) VALUES ('$time','$user_name','$user_phone','$user_ip')";
  return mysqli_query($link, $sql_request);
}

// This function automates the process of receiving products from the Database
function get_products($link) {
  $sql_request = "SELECT * FROM `products`";
  return mysqli_query($link, $sql_request);
}
