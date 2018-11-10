<?php
/**
 * Created by PhpStorm.
 * User: valchevgd
 * Date: 11/8/2018
 * Time: 5:02 PM
 */

namespace App\Http;


use App\Data\UserDTO;

class UserHttpHandler extends HttpHandlerAbstract
{

    public function register(\App\Service\UserService $userService, array $form_data)
    {
        if (isset($form_data['register'])) {

            try{
                $user = UserDTO::create(
                    $form_data['username'],
                    $form_data['password'],
                    $form_data['first_name'],
                    $form_data['last_name']
                );

                if ($userService->register($user, $form_data['confirm_password'])) {
                    $this->redirect('success.php');
                }
            }catch (\PDOException $exception){
                echo '<p style="color: red">Username is already taken.<p/>';
                $this->template->render('user/register');
            }catch (\Exception $exception){
                echo '<p style="color: red">' . $exception->getMessage() . '<p/>';
                $this->template->render('user/register');
            }
        } else {
            $this->template->render('user/register');
        }
    }

    public function login(\App\Service\UserService $userService, array $form_data)
    {
        if (isset($form_data['login'])) {

            try{
                if ($userService->login($form_data['username'], $form_data['password'])) {
                    $this->redirect('index.php');
                }
            }catch (\Exception $exception){
                echo '<p style="color: red">' . $exception->getMessage() . '<p/>';
                $this->template->render('user/login');
            }

        } else {
            $this->template->render('user/login');
        }
    }

    public function logout(array $form_data)
    {
        if (isset($form_data['yes'])) {
            session_destroy();
            $this->redirect("index.php");
        } elseif (isset($form_data['no'])) {
            $this->redirect("index.php");
        } else {
            $this->template->render("user/logout");
        }
    }

    public function delete(\App\Service\TaskService $taskService, \App\Service\UserService $userService, array $form_data)
    {
        $user = $userService->getCurrentUser($_SESSION['id']);

        if (isset($form_data['yes'])) {
            try {
                if ($userService->delete($_SESSION['id'], $form_data['password'])) {
                    if ($taskService->deleteTaskByUser($_SESSION['id'])) {
                        session_destroy();
                        $this->redirect("index.php");
                    }

                }
            } catch (\Exception $e) {
                echo '<p style="color: red">' . $e->getMessage() . '<p/>';
                $this->template->render("user/delete", $user);
            }

        } elseif (isset($form_data['no'])) {
            $this->redirect("index.php");
        } else {
            $this->template->render("user/delete", $user);
        }
    }
}