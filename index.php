<?php
$heading = "Home";
function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}

function Urlis($value){
    return $_SERVER['REQUEST_URI']===$value;
}
require("views/index.view.php");
