<?php
/**
 * Created by PhpStorm.
 * User: valchevgd
 * Date: 11/8/2018
 * Time: 5:03 PM
 */

namespace App\Http;


use App\Service\TaskService;
use App\Service\UserService;

class HomeHttpHandler extends HttpHandlerAbstract
{

    public function index(UserService $userService, TaskService $taskService)
    {
        if ($userService->isLogged()){
           $this->template->render('task/all', $taskService->allTasks($_SESSION['id']));
        }else{
            $this->template->render('home/index');
        }
    }

    public function success()
    {
        $this->template->render('home/success');
    }


}