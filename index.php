<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $movies=['interception','intersteller','matrux'];

    


    ?>

<ul>

<?php foreach($movies as $movie): ?>
    <? if($movie==='intercepion'): ?>
        
        <?= $movie ?>
        
        
        <?php endif ;?>

       

     <?php endforeach; ?>




</ul>
    
</body>
</html>