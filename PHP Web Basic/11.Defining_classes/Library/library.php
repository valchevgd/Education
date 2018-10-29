<?php

spl_autoload_register();

$author = readline();
$title = readline();
$price = floatval(readline());
$type = readline();

try{
    if ($type === 'STANDARD'){
        $book = new Book($title, $author, $price);
    }elseif ($type === 'GOLD'){
        $book = new GoldenEditionBook($title, $author, $price);
    }else{
        throw new Exception('Type is not valid!');
    }
}catch (Exception $e){
    echo $e->getMessage();
}

echo $book;