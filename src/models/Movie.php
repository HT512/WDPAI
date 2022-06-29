<?php

class Movie
{
    private $name;
    private $director;
    private $genre;
    private $yearOfRelease;
    private $pointCost;
    private $rating;
    private $image;
    private $id;

    public function __construct(string $name,string $director,string $genre, int $yearOfRelease, int $pointCost, int $rating, string $image, int $id)
    {
        $this->name = $name;
        $this->director = $director;
        $this->genre = $genre;
        $this->yearOfRelease = $yearOfRelease;
        $this->pointCost = $pointCost;
        $this->rating = $rating;
        $this->image = $image;
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getDirector(): string
    {
        return $this->director;
    }

    /**
     * @param string $director
     */
    public function setDirector(string $director): void
    {
        $this->director = $director;
    }

    /**
     * @return int
     */
    public function getGenre(): string
    {
        return $this->genre;
    }

    /**
     * @param int $genre
     */
    public function setGenre(int $genre): void
    {
        $this->genre = $genre;
    }

    /**
     * @return int
     */
    public function getYearOfRelease(): int
    {
        return $this->yearOfRelease;
    }

    /**
     * @param int $yearOfRelease
     */
    public function setYearOfRelease(int $yearOfRelease): void
    {
        $this->yearOfRelease = $yearOfRelease;
    }

    /**
     * @return int
     */
    public function getPointCost(): int
    {
        return $this->pointCost;
    }

    /**
     * @param int $pointCost
     */
    public function setPointCost(int $pointCost): void
    {
        $this->pointCost = $pointCost;
    }

    /**
     * @return int
     */
    public function getRating(): int
    {
        return $this->rating;
    }

    /**
     * @param int $rating
     */
    public function setRating(int $rating): void
    {
        $this->rating = $rating;
    }

    /**
     * @return string
     */
    public function getImage(): string
    {
        return $this->image;
    }

    /**
     * @param string $image
     */
    public function setImage(string $image): void
    {
        $this->image = $image;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }




}