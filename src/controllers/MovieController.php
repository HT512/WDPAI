<?php

require_once 'AppController.php';
require_once __DIR__ . '/../models/Movie.php';
require_once __DIR__ . '/../repository/MovieRepository.php';


class MovieController extends AppController {

    public function movie()
    {
        if(!isset($_SESSION["logged"]) || $_SESSION["logged"]==0){
            $this->render('login');
        }

        $url2 = explode("/", $_SERVER["REQUEST_URI"]);
        if(isset($url2[2])){
            $id = $url2[2];
        }
        else{
            $id = 0;
        }

        $movieRepository = new MovieRepository();
        $movie = $movieRepository->getById($id);
        $this->render('movie', ['data' => [$movie]]);
    }

}