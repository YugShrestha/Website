<?php
require("function.php"); 
$uri =parse_url( $_SERVER['REQUEST_URI'])['path'];


$routes=[
    '/website/index1.php'=>'controller/index.php',
    '/website/index1.php/about.php'=>'controller/index.php',
    '/website/index1.php/contact.php'=>'controller/index.php'
];
   if(array_key_exists($uri,$routes)){
    require $routes[$uri];
   }
?>