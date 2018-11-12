<?php
/**
 * Created by PhpStorm.
 * User: valchevgd
 * Date: 11/8/2018
 * Time: 5:02 PM
 */

namespace App\Http;


use App\Data\UserDTO;
use App\Service\UserService;
use DateTime;

class UserHttpHandler extends HttpHandlerAbstract
{

    public function register(\App\Service\UserService $userService, array $form_data)
    {
        if (isset($form_data['register'])) {

            $date = date('d.m.Y', strtotime($form_data['born_on']));
            try {
                $user = UserDTO::create(
                    $form_data['username'],
                    $form_data['password'],
                    $form_data['full_name'],
                    $date
                );

                if ($userService->register($user, $form_data['confirm_password'])) {

                    $this->redirect('login.php');
                }
            } catch (\PDOException $exception) {
                echo '<p style="color: red">Username is already taken.<p/>';
                $this->template->render('user/register');
            } catch (\Exception $exception) {
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
            try {
                if ($userService->login($form_data['username'], $form_data['password'])) {
                    $this->redirect('profile.php');
                }
            } catch (\Exception $exception) {
                echo '<p style="color: red">' . $exception->getMessage() . '<p/>';
                $this->template->render('user/login');
            }

        } else {
            $data = "Congratulation . Login in our system";
            $this->template->render('user/login', $data);
        }
    }

    public function profile(UserService $userService)
    {
        $current_user = $userService->getCurrentUser($_SESSION['id']);
        $this->template->render('user/profile', $current_user);
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

}