<?php

namespace App\Core;

use PDO;
use PDOException;



class DataBase
{
    private $connection;
    public function __construct($config, $username = 'user', $password = 'password')
    {
        $dsn = "mysql:host={$config['host']};dbname={$config['dbname']};charset={$config['charset']}";
        try {
            $this->connection = new PDO($dsn, $username, $password, [
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]);
        } catch (PDOException $e) {
            die("Database connection failed: " . $e->getMessage());
        }
    }

    public function query($query,$params = []){
        $statement = $this->connection->prepare($query);
        if(!$statement){
            return false;
        }
        $statement->execute($params);
        if(str_starts_with(strtolower(trim($query)),'select')){
            $result = $statement->fetchAll();
            return $result;
        }
        return true;
    }
}
