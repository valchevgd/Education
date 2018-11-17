<?php

spl_autoload_register();

$uri = $_SERVER['REQUEST_URI'];
$self = explode('/', $_SERVER['PHP_SELF']);
array_pop($self);
$replace = implode('/', $self);

$uri = str_replace($replace.'/','', $uri);
$params = explode('/', $uri);
$controllerName = array_shift($params);
$actionName = array_shift($params);

$mvcContext = new \Core\Mvc\MvcContext($controllerName, $actionName, $params);
$app = new \Core\Application($mvcContext);

$app->start();