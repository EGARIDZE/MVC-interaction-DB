<?php


header('Content-Type: application/json; charset=utf-8');
require_once __DIR__ . '/../vendor/autoload.php';

use Controllers\UserController;

$control = new UserController;

    $params = [
        'name' => $_POST['name'],
        'login' => $_POST['login'],
    ];

$result = $control->checkLogin($params['name'], $params['login']);
echo json_encode($result);

