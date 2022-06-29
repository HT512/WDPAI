<?php
session_start();

require_once 'AppController.php';
require_once __DIR__ .'/../models/User.php';
require_once __DIR__ . '/../repository/UserRepository.php';

class SecurityController extends AppController {

    public function login()
    {
        $userRepository = new UserRepository();


        if (!$this->isPost()) {
            return $this->render('login');
        }

        $email = $_POST['email'];
        $password = $_POST['password'];
        $user = $userRepository->getUser($email);

        if(!$user){
            return $this->render('login', ['messages' => ['User not exist!']]);
        }

        if ($user->getEmail() !== $email) {
            return $this->render('login', ['messages' => ['User with this email not exist!']]);
        }

        if (!password_verify($password, $user->getPassword())) {
            return $this->render('login', ['messages' => ['Wrong password!']]);
        }

        $url = "http://$_SERVER[HTTP_HOST]";
        header("Location: {$url}/projects");
        $_SESSION["logged"] = 1;
        $_SESSION["id"] = $user->getId();

        if($user->isAdmin())
        {
            $_SESSION["admin"] = 1;
        }
        else {
            $_SESSION["admin"] = 0;
        }
        $_SESSION["email"] = $user->getEmail();
    }

    public function reg()
    {
        $userRepository = new UserRepository();


        if (!$this->isPost()) {
            return $this->render('register');
        }

        $email = $_POST['email'];
        $password = $_POST['password'];
        $pswd_check = $_POST['confirmedPassword'];
        $name = $_POST['name'];

        $user = $userRepository->getUser($email);

        if($user){
            return $this->render('register', ['messages' => ['Email already taken!']]);
        }

        if ($password !== $pswd_check) {
            return $this->render('register', ['messages' => ['Passwords do not match!']]);
        }

        $user = new User($email, password_hash($password, PASSWORD_BCRYPT), $name, 0);
        $userRepository->addUser($user);
        $url = "http://$_SERVER[HTTP_HOST]";
        $_SESSION["logged"] = 1;
        $_SESSION["id"] = $user->getId();
        $_SESSION["admin"] = 0;
        $_SESSION["email"] = $user->getEmail();
        header("Location: {$url}/projects");
        return $this->render('register');
    }


    public function logout()
    {
        $url = "http://$_SERVER[HTTP_HOST]";
        if(isset($_SESSION["logged"]) && $_SESSION["logged"]==1){
            $_SESSION["logged"] = 0;
            $_SESSION["admin"] = 0;
            $_SESSION["email"] = 0;
        }
        header("Location: {$url}");
    }
}