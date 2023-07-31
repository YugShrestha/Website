<?php

require("function.php"); 
//require "router.php";


$dsn="mysql:host=localhost;port=3306;dbname=demo;";

$pdo= new PDO($dsn,'root');// pdo class is already creeated 

$statemnet =$pdo->prepare("select * from  post");

$statemnet->execute();




$post= $statemnet->fetchAll();

dd($post);