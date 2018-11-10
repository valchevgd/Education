<?php

namespace App\Http;


use App\Data\UserDTO;
use App\Service\UserServiceInterface;

class UserHttpHandler extends HttpHandlerAbstract
{
    public function register(UserServiceInterface $userService, array $formData = [])
    {
        if (isset($formData['register'])) {
            $user = UserDTO::create(
                $formData['username'],
                $formData['password'],
                $formData['first_name'],
                $formData['last_name'],
                $formData['born_on']
            );

            if ($userService->register($user, $formData['confirm_password'])) {
                $this->redirect('login.php');
            }
        } else {
            $this->render('user/register');
        }
    }

    public function login(UserServiceInterface $userService, array $formData = [])
    {

        if (isset($formData['login'])) {
            if ($userService->login($formData['username'], $formData['password'])) {

                $this->redirect('profile.php');
            } else {
                $this->render('user/login');
            }
        } else {
            $this->render('user/login');
        }
    }

    public function profile(UserServiceInterface $userService, array $formData = [])
    {

        if (isset($formData['edit'])) {

            $user = UserDTO::create(
                $formData['username'],
                $formData['password'],
                $formData['first_name'],
                $formData['last_name'],
                $formData['born_on']
            );

            if ($userService->edit($user)) {

                $this->redirect('profile.php');
            }

        } else {
            $current_user = $userService->getCurrentUser();
            $this->render('user/profile', $current_user);
        }
    }

    public function view_all(UserServiceInterface $userService)
    {
        $all_users = $userService->viewAll();
        $this->render("user/users", $all_users);
    }

    public function logout(array $formData)
    {
        if (isset($formData['yes'])){
            session_destroy();
            $this->redirect('index.php');
        }elseif (isset($formData['no'])){
            $this->redirect('profile.php');
        }else{
            $this->render('user/logout');
        }
    }

    public function delete(\App\Service\UserService $userService, array $formData)
    {
        if (isset($formData['yes'])){
            $user = $userService->getCurrentUser();
            if ($userService->delete($user)){
                session_destroy();
                $this->redirect('index.php');
            }
        }elseif (isset($formData['no'])){
            $this->redirect('profile.php');
        }else{
            $this->render('user/delete');
        }
    }
}