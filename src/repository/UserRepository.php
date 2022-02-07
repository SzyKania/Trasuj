<?php

require_once 'Repository.php';
require_once __DIR__.'/../models/User.php';

class UserRepository extends Repository
{
    public function getUser(string $email): ?User
    {
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM public.users
            JOIN public.users_details on users.id_user_details = users_details.id_details
            WHERE users.email = :email
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
            $user['name'],
            $user['surname'],
            $user['id'],
            $user['image']
        );
    }

    public function getUserById($id): ?User
    {
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM public.users
            JOIN public.users_details on users.id_user_details = users_details.id_details
            WHERE users.id = :id
        ');
        $stmt->bindParam(':id', $id, PDO::PARAM_STR);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user == false) {
            return null;
        }

        return new User(
            $user['email'],
            $user['password'],
            $user['name'],
            $user['surname'],
            $user['id'],
            $user['image']
        );
    }

    public function getUsers(): array
    {
        $result = [];

        $stmt = $this->database->connect()->prepare('
            SELECT * FROM public.users
            JOIN public.users_details on users.id_user_details = users_details.id_details
        ');
        $stmt->execute();
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($users as $user) {
            $result[] = new User(
                $user['email'],
                $user['password'],
                $user['name'],
                $user['surname'],
                $user['id'],
                $user['image']
            );
        }

        return $result;
    }

    public function getFollowed($id): array
    {
        $result = [];

        $stmt = $this->database->connect()->prepare('
            SELECT * FROM public.users_followed uf
            JOIN public.users u on uf.id_followed = u.id
            JOIN public.users_details ud on ud.id_details = u.id_user_details
            WHERE id_following = :id
        ');

        $stmt->bindParam(':id', $id, PDO::PARAM_STR);
        $stmt->execute();
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($users as $user) {
            $result[] = new User(
                $user['email'],
                $user['password'],
                $user['name'],
                $user['surname'],
                $user['id'],
                $user['image']
            );
        }

        return $result;
    }

    public function addUser(User $user)
    {
        $stmt = $this->database->connect()->prepare('
            INSERT INTO users_details (name, surname, phone)
            VALUES (?, ?, ?)
        ');

        $stmt->execute([
            $user->getName(),
            $user->getSurname(),
            $user->getPhone()
        ]);

        $stmt = $this->database->connect()->prepare('
            INSERT INTO users (email, password, id_user_details)
            VALUES (?, ?, ?)
        ');

        $stmt->execute([
            $user->getEmail(),
            $user->getPassword(),
            $this->getUserDetailsId($user)
        ]);
    }

    public function followUser($idFollower, $idFollowed)
    {
        $stmt = $this->database->connect()->prepare('
            INSERT INTO users_followed (id_following, id_followed) 
            VALUES (?, ?)
            ON CONFLICT DO NOTHING
        ');

        $stmt->execute([
            $idFollower,
            $idFollowed
        ]);
    }

    public function unfollowUser($idFollower, $idFollowed)
    {
        $stmt = $this->database->connect()->prepare('
            DELETE FROM users_followed 
            WHERE id_following = :id_following AND id_followed = :id_followed
        ');

        $stmt->execute([
            $idFollower,
            $idFollowed
        ]);
    }


    public function getUserDetailsId(User $user): int
    {
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM public.users_details WHERE name = :name AND surname = :surname AND phone = :phone
        ');
        $stmt->bindParam(':name', $user->getName(), PDO::PARAM_STR);
        $stmt->bindParam(':surname', $user->getSurname(), PDO::PARAM_STR);
        $stmt->bindParam(':phone', $user->getPhone(), PDO::PARAM_STR);
        $stmt->execute();

        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        return $data['id'];
    }

}