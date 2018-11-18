<?php

namespace Controllers;


use DTO\UserViewModel;
use ViewEngine\ViewInterface;

class Users
{
    public function hello(string $firstName, string $lastName, ViewInterface $view)
    {
        $viewModel = new UserViewModel($firstName, $lastName);
        $view->render($viewModel);
    }
}