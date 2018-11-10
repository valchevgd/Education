<?php
session_start();

spl_autoload_register();

$dbInfo = parse_ini_file("Config/db.ini");
$pdo = new PDO($dbInfo['dsn'], $dbInfo['user'], $dbInfo['pass'], [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
$db = new Database\PDODatabase($pdo);
$template = new Core\Template();
$taskRepository = new App\Repository\TaskRepository($db);
$taskService = new App\Service\TaskService($taskRepository);
$task_http_handler = new App\Http\TaskHttpHandler($template);
$userRepository = new App\Repository\UserRepository($db);
$userService = new App\Service\UserService($userRepository);
$user_http_handler = new \App\Http\UserHttpHandler($template);
$home_http_handler = new App\Http\HomeHttpHandler($template);