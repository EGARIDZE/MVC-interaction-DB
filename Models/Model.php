<?php

namespace Models;

use PDO;
use PDOException;




class Model
{
    public $connection;
    public $stmt;

    public function __construct()
{
    $db_config = require "../config/db.php";
    $dsn = "mysql:host={$db_config['host']};dbname={$db_config['dbname']};charset={$db_config['charset']}";
    try {
        $this->connection = new PDO($dsn, $db_config['username'], $db_config['password'], $db_config['options']);
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}


        public function query($query, $params = [])
    {
        $this->stmt = $this->connection->prepare($query);
        $this->stmt->execute($params);
        return $this->stmt;
    }

}