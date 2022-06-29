<?php

require_once 'Repository.php';
require_once __DIR__.'/../models/User.php';

class UserRepository extends Repository
{

    public function getUser(string $email): ?User
    {
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM public.users WHERE email = :email
        ');
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user == false) {
            return null;
        }

        return new User(
            $user['email'],
            $user['password'],
            $user['nick'],
            $user['UserId'],
            $user['points'],
            $user['admin']
        );
    }
    public function addUser(User $user)
    {
        $stmt = $this->database->connect()->prepare('
            INSERT INTO users (email, password, nick, points)
            VALUES (?, ?, ?, ?)
        ');

        $stmt->execute([
            $user->getEmail(),
            $user->getPassword(),
            $user->getNick(),
            0
        ]);
    }

    public function updatePoints(User $user)
    {
        $stmt = $this->database->connect()->prepare('
            UPDATE users
            SET points = (?)
            WHERE email = (?)
        ');

        $stmt->execute([
            $user->getPoints(),
            $user->getEmail()
        ]);
    }

    public function buyMovie(int $user, int $movie)
    {
        $stmt = $this->database->connect()->prepare('
            INSERT INTO user_movies (userid, movieid)
            VALUES (?, ?)
        ');

        $stmt->execute([
            $user,
            $movie
        ]);
    }

}
