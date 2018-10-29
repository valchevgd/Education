<?php

class UsersController extends BaseController
{

    public function index()
    {
        $this->authorize();
        $this->users = $this->model->getAll();
    }

    public function register()
    {

        if ($this->isPost){
            $username = $_POST['username'];
            if (strlen($username) < 2 or strlen($username) > 50){
                $this->setValidationError("username", "Invalid username!");
            }
            $password = $_POST['password'];
            if (strlen($password) < 2 or strlen($password) > 50){
                $this->setValidationError("password", "Invalid password!");
            }
            $full_name = $_POST['full_name'];
            if (strlen($full_name) > 200){
                $this->setValidationError("full_name", "Invalid full name!");
            }

            if ($this->formValid()){

                $user_id = $this->model->register($username, $password, $full_name);

                if ($user_id){
                    $_SESSION['username'] = $username;
                    $_SESSION['user_id'] = $user_id;
                    $this->addInfoMessage("Registration successful");
                    header("Location:/blog/users/login");
                }else{
                    $this->addErrorMessage("Error: user register failed");
                }
            }
        }
    }

    public function login()
    {
        if ($this->isPost) {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $loggedUserId = $this->model->login($username, $password);
            if ($loggedUserId) {
                $_SESSION['username'] = $username;
                $_SESSION['id'] = $loggedUserId;
                $this->addInfoMessage('Login successful');
                header("Location:/blog");
            } else {
                $this->addErrorMessage('Error: login failed');
            }

        }
    }

    public function logout()
    {
        session_destroy();
        $this->addInfoMessage("Logout successful");
        header("Location:/blog/users/login");
    }
}