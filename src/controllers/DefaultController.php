<?php

require_once 'AppController.php';
require_once __DIR__ .'/../models/User.php';
require_once __DIR__ . '/../repository/UserRepository.php';
require_once __DIR__ .'/../models/Movie.php';
require_once __DIR__ . '/../repository/MovieRepository.php';

class DefaultController extends AppController {

    public function updateUserPoints($email, $points){
        $userRepository = new UserRepository();
        $user = $userRepository->getUser($email);
        $user->setPoints($points);
        $userRepository->updatePoints($user);
        return $user;
    }


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
        $moviesOver5 = $movieRepository->rankingOver5();
        $this->render('projects', ['data' => [$movies], 'over5' =>[$moviesOver5]]);
    }

    public function points()
    {
        $this->isLogged();
        $userRepository = new UserRepository();
        $points = $userRepository->getUser($_SESSION["email"])->getPoints();
        $this->render('points', ['points' => $points]);
    }

    public function add_points()
    {
        $this->isLogged();
        $userRepository = new UserRepository();
        $user = $userRepository->getUser($_SESSION["email"]);
        $points = $user->getPoints()+$_POST['points'];
        $user = $this->updateUserPoints($_SESSION["email"], $points);
        $this->render('points', ['points' => $user->getPoints()]);
    }

    public function register()
    {
        $this->render('register');
    }
    public function profile()
    {
        $this->isLogged();
        $userRepository = new UserRepository();
        $user = $userRepository->getUser($_SESSION["email"]);
        $this->render('profile', ['data' => [$user]]);

    }

    public function buy()
    {
        $userRepository = new UserRepository();
        $movieRepository = new MovieRepository();
        $movie = $movieRepository->getById($_POST['movieid']);
        $user = $userRepository->getUser($_SESSION["email"]);
        if($user->getPoints() < $_POST['cost']){
            echo("Brak środków");
            $this->render('movie', ['data' => [$movie]]);
        }
        else{
            $user = $this->updateUserPoints($_SESSION["email"], $user->getPoints()-$_POST['cost']);
            $userRepository->buyMovie($user->getId(), $_POST['movieid']);
            $this->render('movie', ['data' => [$movie]]);
        }
    }

}