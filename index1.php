<?php

require("function.php"); 
//require "router.php";


$dsn="mysql:host=localhost;port=3306;dbname=demo;";

$pdo= new PDO($dsn,'root');// pdo class is already created  just called class lai naya object ma halya 
$statement =$pdo->prepare("select * from  post");
$statement->execute();






$post= $statement->fetchAll();

dd($post);