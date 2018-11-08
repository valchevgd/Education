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

            $user = UserDTO::create(
                $form_data['username'],
                $form_data['password'],
                $form_data['first_name'],
                $form_data['last_name']
            );


            if ($userService->register($user, $form_data['confirm_password'])) {
                $this->redirect('login.php');
            }


        } else {
            $this->template->render('user/register');
        }
    }
}