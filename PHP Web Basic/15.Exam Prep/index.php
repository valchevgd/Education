<?php

include_once 'common.php';

$userRepository = new App\Repository\UserRepository($db);
$userService = new App\Service\UserService($userRepository);
$home_http_handler = new App\Http\HomeHttpHandler($template);

$home_http_handler->index($userService);