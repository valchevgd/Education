<?php

session_start();

spl_autoload_register();

$dbInfo = parse_ini_file("Config/db.ini");
$template = new \Core\Template();
$db = new \Database\PDODatabase( new PDO($dbInfo['dsn'], $dbInfo['user'], $dbInfo['pass']));
$userRepository = new \App\Repository\UserRepository($db);
$userService = new \App\Service\UserService($userRepository);
$userHttpHandler = new \App\Http\UserHttpHandler($template);