<?php

namespace App\Http;


use App\Data\UserDTO;

class UserHttpHandler extends HttpHandlerAbstract
{

    public function register(\App\Service\UserService $userService, array $form_data)
    {
        if (isset($form_data['register'])) {

            $user = UserDTO::create(
                $form_data['username'],
                $form_data['password'],
                $form_data['first_name'],
                $form_data['last_name'],
                $form_data['born_on']
            );

            try {
                if ($userService->register($user, $form_data['confirm_password'])) {
                    $this->redirect("login.php");
                }

            } catch (\Exception $e) {
                echo '<p style="color: red">'.$e->getMessage().'<p/>';
                $this->template->render("user/register");
            }

        } else {
            $this->template->render("user/register");
        }
    }

    public function login(\App\Service\UserService $userService, array $form_data)
    {
        if (isset($form_data['login'])) {
            if ($userService->login($form_data['username'], $form_data['password'])) {
                $this->redirect("index.php");
            } else {
                echo '<p style="color: red">Wrong username or password.<p/>';
                $this->template->render("user/login");
            }
        } else {
            $this->template->render("user/login");
        }
    }

    public function profile(\App\Service\UserService $userService, array $form_data)
    {
        if (isset($form_data['edit'])) {

            $user = UserDTO::create(
                $form_data['username'],
                $form_data['password'],
                $form_data['first_name'],
                $form_data['last_name'],
                $form_data['born_on']
            );

            if ($userService->edit($_SESSION['id'], $user)) {
                $this->redirect("index.php");
            }
        } else {
            $user = $userService->getCurrentUser();

            $this->template->render("user/profile", $user);
        }
    }

    public function logout($form_data)
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

    public function delete(\App\Service\UserService $userService, array $form_data)
    {
        $user = $userService->getCurrentUser();

        if (isset($form_data['yes'])) {
            try {
                if ($userService->delete($_SESSION['id'], $form_data['password'])) {
                    session_destroy();
                    $this->redirect("index.php");
                }
            } catch (\Exception $e) {
                echo '<p style="color: red">'.$e->getMessage().'<p/>';
                $this->template->render("user/delete", $user);
            }

        } elseif (isset($form_data['no'])) {
            $this->redirect("index.php");
        } else {
            $this->template->render("user/delete", $user);
        }
    }
}