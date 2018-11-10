<?php

namespace App\Http;


use App\Data\TaskDTO;

class TaskHttpHandler extends HttpHandlerAbstract
{

    public function addTask(\App\Service\TaskService $taskService, array $form_data)
    {
        if (isset($form_data['add'])){

            try{
                $task = TaskDTO::create(
                    $form_data['title'],
                    $form_data['description'],
                    $form_data['location'],
                    $_SESSION['id'],
                    $form_data['cat_id'],
                    $form_data['start_on'],
                    $form_data['due_date']
                );

                if ($taskService->addTask($task)){
                    $this->redirect('index.php');
                }
            }catch (\Exception $exception){
                echo '<p style="color: red">' . $exception->getMessage() . '<p/>';
                $this->template->render('task/add');
            }

        }else{
            $this->template->render('task/add');
        }
    }

    public function editTask(\App\Service\TaskService $taskService, array $form_data)
    {
        if (isset($form_data['edit'])){

            try{
                $task = TaskDTO::create(
                    $form_data['title'],
                    $form_data['description'],
                    $form_data['location'],
                    $_SESSION['id'],
                    intval($form_data['cat_id']),
                    $form_data['start_on'],
                    $form_data['due_date']
                );

                if ($taskService->editTask($task, $form_data['task_id'])){
                    $this->redirect('index.php');
                }
            }catch (\Exception $exception){
                echo '<p style="color: red">' . $exception->getMessage() . '<p/>';
                $this->template->render("task/edit", $taskService->findOneById($_GET['task_id']));
            }

        }else{
            $this->template->render("task/edit", $taskService->findOneById($_GET['task_id']));
        }
    }

    public function deleteTask(\App\Service\TaskService $taskService,\App\Service\UserService $userService, $form_data)
    {
        if (isset($form_data['delete'])){
            $user = $userService->getCurrentUser($_SESSION['id']);
            if (password_verify($form_data['password'], $user->getPassword())){
                if($taskService->deleteTask($form_data['task_id'])){
                    $this->redirect('index.php');
                }
            }
        }else{
            $this->template->render("task/delete", $taskService->findOneById($_GET['task_id']));
        }
    }
}