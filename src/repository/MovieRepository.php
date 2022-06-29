<?php

require_once 'Repository.php';
require_once __DIR__.'/../models/Movie.php';

class MovieRepository extends Repository
{

    public function getById(int $id): ?Movie
    {
        $stmt = $this->database->connect()->prepare('
            SELECT movie.Name, Director, genres.name as genre, YearOfRelease, PointCost, Rating, Image, movie.id FROM public.movie LEFT JOIN genres ON movie.genre = genres.id WHERE movie.id = :id
        ');
        $stmt->bindParam(':id', $id, PDO::PARAM_STR);
        $stmt->execute();

        $movie = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($movie == false) {
            return null;
        }
        return new Movie(
            $movie['name'],
            $movie['director'],
            $movie['genre'],
            $movie['yearofrelease'],
            $movie['pointcost'],
            $movie['rating'],
            $movie['image'],
            $movie['id']
        );
    }


    public function get5Newest(): ?Movie
    {
        $stmt = $this->database->connect()->prepare('
            SELECT movie.Name, Director, genres.name as genre, YearOfRelease, PointCost, Rating, Image, movie.id FROM public.movie LEFT JOIN genres ON movie.genre = genres.id ORDER BY id DESC LIMIT 5
        ');
        $stmt->execute();

        $movie = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($movie == false) {
            return null;
        }
        return new Movie(
            $movie['name'],
            $movie['director'],
            $movie['genre'],
            $movie['yearofrelease'],
            $movie['pointcost'],
            $movie['rating'],
            $movie['image'],
            $movie['id']
        );
    }



}