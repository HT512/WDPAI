<?php

require_once 'AppController.php';
require_once __DIR__ . '/../models/User.php';
require_once __DIR__ . '/../repository/UserRepository.php';
require_once __DIR__ . '/../models/Movie.php';
require_once __DIR__ . '/../repository/MovieRepository.php';

class DefaultController extends AppController {

    public function index()
    {
        $this->render('login');
    }

    public function admin()
    {
        if(isset($_SESSION["admin"]) && $_SESSION["admin"]==1){
            $this->render('admin');
        }
        else{
            die("You're not admin");
        }
    }

    public function projects()
    {
        $movieRepository = new MovieRepository();
        $movies = $movieRepository->get5Newest();
        $this->render('projects', ['data' => [$movies]]);
    }
    public function register()
    {
        $this->render('register');
    }
    public function profile()
    {
        if(!isset($_SESSION["logged"]) || $_SESSION["logged"]==0){
            $this->render('login');
        }
        else{
            $userRepository = new UserRepository();
            $user = $userRepository->getUser($_SESSION["email"]);
            $this->render('profile', ['data' => [$user]]);
        }

    }

}