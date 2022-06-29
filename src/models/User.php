<?php

class User
{
    private $email;
    private $password;
    private $nick;
    private $points;
    private $isAdmin;

    public function __construct(string $email,string $password,string $nick, int $points=0, bool $isAdmin=false)
    {
        $this->email = $email;
        $this->password = $password;
        $this->nick = $nick;
        $this->points = $points;
        $this->isAdmin = $isAdmin;
    }


    public function getEmail(): string
    {
        return $this->email;
    }


    public function setEmail(string $email)
    {
        $this->email = $email;
    }


    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password)
    {
        $this->password = $password;
    }


    public function getNick(): string
    {
        return $this->nick;
    }


    public function setNick(string $nick)
    {
        $this->nick = $nick;
    }

    public function getPoints(): int
    {
        return $this->points;
    }


    public function setPoints(int $nick)
    {
        $this->nick = points;
    }

    /**
     * @return bool
     */
    public function isAdmin(): bool
    {
        return $this->isAdmin;
    }

    /**
     * @param bool $isAdmin
     */
    public function setIsAdmin(bool $isAdmin): void
    {
        $this->isAdmin = $isAdmin;
    }



}