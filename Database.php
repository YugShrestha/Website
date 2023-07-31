<?php


class Database

{
   public $connection;

    public function __construct()
    {
        $dsn = "mysql:host=localhost;port=3306;user=root;dbname=demo;";

        $this->connection = new PDO($dsn); // pdo class is already created  just called class lai naya object ma halya 
        
    }
    public function query($query)
    {
 
        $statement = $this->connection->prepare($query);
        $statement->execute();

        return $statement;// fetch class called

       
    }
}