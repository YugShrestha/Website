<?php
require("function.php"); 
$uri = $_SERVER['REQUEST_URI'];

if($uri==='/website/index1.php'){
 require 'controller/index.php';
}
else if($uri==='/website/index1.php/about.php'){
    require 'controller/about.php';
}else if
($uri==='/website/index1.php/contact.php'){
    require 'controller/contact.php';
}

   dd($uri);
?>