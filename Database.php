<?php

class Database
{
    public $connection;
    //default parameter
    public function __construct($config, $username = 'root',$password = '')
    {
         $connection_string = http_build_query($config,'',';');


         //'mysql:host=localhost;port=3306;dbname=php_app;charset=utf8mb4;
         $dsn = 'mysql:' . $connection_string;

         $this->connection = new PDO($dsn, $username, $password, [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
    }

    public function query($query, $params = [])
    {
        $statement = $this->connection->prepare($query);

        $statement->execute($params);

        return $statement;
    }
}