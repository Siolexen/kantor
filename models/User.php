<?php

class User
{
    public function create($username, $password)
    {
        if (!strlen($username) || !strlen($password)) {
            $response = 'Username or password are empty';

            return $response;
        }

        try {
            $pdo = new ConnectionDatabase();
            $db = $pdo->connect();
            $hashPassword = md5($password);
            $query = $db->prepare("INSERT INTO Users (username, password) VALUES (:username, :password)");
            $query->bindParam(':username', $username);
            $query->bindParam(':password', $hashPassword);
            $query->execute();
            $response = true;
        } catch (PDOException $e) {
            $response = $e;
        }

        return $response;
    }

    public function search($username, $password)
    {
        try {
            $pdo = new ConnectionDatabase();
            $db = $pdo->connect();
            $hashPassword = md5($password);
            $query = $db->prepare("SELECT * FROM Users WHERE `username` = :username AND `password` = :password");
            $query->bindParam(':username', $username);
            $query->bindParam(':password', $hashPassword);
            $query->execute();
            $rows = $query->fetchAll(PDO::FETCH_ASSOC);

            if (count($rows) === 1) {
                $response = true;
            } else {
                $response = false;
            }

        } catch (PDOException $e) {
            $response = $e;
        }

        return $response;
    }
}