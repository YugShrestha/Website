<?php

require("function.php");
//require "router.php";
class Database

{
   public $connection;

    public function __construct()
    {
        $dsn = "mysql:host=localhost;port=3306;dbname=demo;";

        $this->connection = new PDO($dsn, 'root'); // pdo class is already created  just called class lai naya object ma halya 
        
    }
    public function query($query)
    {
 
        $statement = $this->connection->prepare($query);
        $statement->execute();

        return $statement->fetch(PDO::FETCH_ASSOC); // fetch class called

       
    }
}
$db=new Database();
$posts=$db->query("select * from post where id=1");

dd($posts['title']);