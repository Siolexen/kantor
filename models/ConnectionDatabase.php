<?php

class ConnectionDatabase
{
    public function connect()
    {
        try {
            $db = new PDO('mysql:host=127.0.0.1;dbname=cantor', 'root', '');
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $db;
        } catch (PDOException $e) {
            echo $e->getTraceAsString();
            print "Error: ".$e->getMessage();
        }
    }
};