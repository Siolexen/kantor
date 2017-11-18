<?php
require_once 'ConnectionDatabase.php';

class User
{
    public function create($username, $password)
    {
        $response = new \stdClass();
        if (!strlen($username) || !strlen($password)) {
            $response = 'Username or password are empty';

            return $response;
        }

        try {
            $pdo = new ConnectionDatabase();
            $db = $pdo->connect();
            $hashPassword = md5($password);
            $query = $db->prepare("INSERT INTO Users (username, password) VALUES ('$username', '$hashPassword')");
            $query->execute();
            $response->message = 'Created!';
        } catch (PDOException $e) {
            $response->message = $e;
        }

        return $response;
    }
}