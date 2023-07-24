<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <h1 style ="    display: grid;
    text-align: center;
"> Movies I like </h1>
</head>
<body>


    <?php 
    $movies=[[
        'name'=>'interception',
        'releaseYear'=>'1982',
        'author'=>'christopher nolan',
        'Url'=>'https://www.example.com'
    ],

   ['name'=>'inception ',
    'releaseYear'=>'1999',
    'author'=>'christopher nolan',
    'Url'=>'https://www.example.com']

   

];
function filter($items,$key,$value){
    $filteredMovies=[];
    foreach($items as $item){
        if($item[$key]===$value ){

            $filteredMovies[]=$item;
    }


}
return $filteredMovies;


}
    
    ?>
    <ul>
        
        <?php 
        
        foreach(filter($movies,'name','interception') as $movie): ?>
        
            <a href=<?php $movie['Url']; ?> >
        
            <li><?= $movie['name']; ?> <?="(".$movie['releaseYear'].")"?>-by<?=" ".$movie['author'] ?> </li>
    </ul>

           

        </a>

            


        
        
    <?php endforeach; ?>


    </ul>


    
</body>
</html>