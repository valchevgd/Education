<?php

/**
 * @return array
 */
function parseRequest():array
{
    $request_path = $_SERVER['REQUEST_URI'];
    if (substr($request_path, 0, strlen(APP_ROOT.'/')) != APP_ROOT.'/'){
        die('APP_ROOT is incorrectly defined in config.php. Use "" or "/blog".');
    }

    $request_path = substr($request_path, strlen(APP_ROOT));
    $request_parts = explode('/', $request_path);

    $controller = DEFAULT_CONTROLLER;
    if (count($request_parts) >= 2 and $request_parts[1] != ''){
        $controller = $request_parts[1];
    }

    $action = DEFAULT_ACTION;
    if (count($request_parts) >=3 and $request_parts[2] != ''){
        $action = $request_parts[2];
    }

    $params = array_slice($request_parts, 3);

    $request_parsed = [
        'controller' => $controller,
        'action' => $action,
        'params' => $params
    ];

    return $request_parsed;
}

/**
 * @param array $request_parsed
 */
function processRequest(array $request_parsed)
{
    $controller = $request_parsed['controller'];
    $action = $request_parsed['action'];
    $controller_class_name = ucfirst(strtolower($controller)).'Controller';

    if (class_exists($controller_class_name)){
        $controller = new $controller_class_name($controller, $action);
    }else{
        $controller_file_name = 'controllers/'.$controller_class_name.'.php';
        die("Cannot find controller '$controller' in class '$controller_file_name'");
    }

    if (method_exists($controller, $action)){
        $params = $request_parsed['params'];
        call_user_func_array(array($controller, $action), $params);
        $controller->renderView();
    }else{
        die("Cannot find action '$action' in controller '$controller_class_name'");
    }
}

function __autoload(string $class_name)
{
    if (file_exists("controllers/$class_name.php")){
        include "controllers/$class_name.php";
    }
    if (file_exists("models/$class_name.php")){
        include "models/$class_name.php";
    }
}

function cutLongText(string $text, int $maxSize=200, bool $htmlEscape = true):string
{
    $append = '';
    if (strlen($text) > $maxSize){
        $text = substr($text, 0, $maxSize);
        $append = '&hellip;';
    }
    if ($htmlEscape){
        $text = htmlspecialchars($text);
    }

    return $text.$append;
}