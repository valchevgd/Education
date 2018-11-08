<?php

include_once 'common.php';

$userRepository = new App\Repository\UserRepository($db);
$userService = new App\Service\UserService($userRepository);
$user_http_handler = new \App\Http\UserHttpHandler($template);

$user_http_handler->register($userService, $_POST);
