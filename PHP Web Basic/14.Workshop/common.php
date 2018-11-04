<?php

session_start();

spl_autoload_register();

$db_info = parse_ini_file("Config/db.ini");
$template = new \Core\Template();
$db = new \Database\PDODatabase(new \PDO($db_info['dsn'], $db_info['user'], $db_info['pass']));
$userService = new \App\Service\UserService(new \App\Repository\UserRepository($db));
$homeHandler = new \App\Http\HomeHttpHandler($template);
$userHttpHandler = new \App\Http\UserHttpHandler($template);