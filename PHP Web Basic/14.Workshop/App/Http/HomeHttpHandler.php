<?php

namespace App\Http;


use App\Service\UserServiceInterface;

class HomeHttpHandler extends HttpHandlerAbstract
{
    public function index(UserServiceInterface $userService)
    {
        if($userService->isLogged()){
            $this->template->render("home/all_users", $userService->viewAll());
        }else{
            $this->template->render("home/index");
        }
    }
}