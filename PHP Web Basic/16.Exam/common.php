<?php
session_start();

spl_autoload_register();

$dbInfo = parse_ini_file("Config/db.ini");
$pdo = new PDO($dbInfo['dsn'], $dbInfo['user'], $dbInfo['pass'], [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
$db = new Database\PDODatabase($pdo);
$template = new Core\Template();
$bookRepository = new App\Repository\BookRepository($db);
$bookService = new App\Service\BookService($bookRepository);
$book_http_handler = new App\Http\BookHttpHandler($template);
$userRepository = new App\Repository\UserRepository($db);
$userService = new App\Service\UserService($userRepository);
$user_http_handler = new \App\Http\UserHttpHandler($template);
$genreRepository = new \App\Repository\GenreRepository($db);
$genreService = new \App\Service\GenreService($genreRepository);
$home_http_handler = new App\Http\HomeHttpHandler($template);