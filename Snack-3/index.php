<!--

Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.


-->


<?php

$dates = [

    
    '10/12/2021' => [
        'Lorem ipsum dolor sit amet.',
        'Lorem ipsum dolor sit amet.',
        'Lorem ipsum dolor sit amet.'
    ],

    
    '15/12/2021' => [
        'Lorem ipsum dolor sit amet.',
        'Lorem ipsum dolor sit amet.',
        'Lorem ipsum dolor sit amet.'
    ],
    

    
    '18/12/2021' => [
        'Lorem ipsum dolor sit amet.',
        'Lorem ipsum dolor sit amet.',
        'Lorem ipsum dolor sit amet.'
    ]
    

];  

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div>
        <?php foreach($dates as $key => $date) {?>
        <h2><?php echo $key ?></h2>
        <ul>
            <?php foreach($date as $post) {?>
            <li>
                <?php echo $post ?>
            </li>
            <?php } ?>
        </ul>
        <?php } ?>
    </div>
    

</body>
</html>