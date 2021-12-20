<!--

Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.


-->


<?php

$dates = [

   "10/05/2021" => [
       'Lorem ipsum dolor sit amet.',
       'Lorem ipsum dolor sit amet.',
       'Lorem ipsum dolor sit amet.',
       
    ],

    "15/07/2021" => [
        'Lorem ipsum dolor sit amet.',
        'Lorem ipsum dolor sit amet.',
    ],

    "20/11/2021" => [
        'Lorem ipsum dolor sit amet.',
    ]

    ];

    $key1 = "10/05/2021";
    $key2 = "15/07/2021";
    $key3 = "20/11/2021";
    $maggio = $dates["10/05/2021"];
    $luglio = $dates["15/07/2021"];
    $novembre = $dates["20/11/2021"];

    echo $dates[1];
    

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
    <h1> <?php echo $key1; ?> </h1>
    <p> <?php  for ($i=0; $i < count($maggio); $i++) { 
        echo "<br>$maggio[$i]";
    } ?> </p>
    <h1> <?php echo $key2; ?> </h1>
     <p> <?php  for ($i=0; $i < count($maggio); $i++) { 
        echo "<br>$luglio[$i]";
    } ?> </p>
    <h1> <?php echo $key3; ?> </h1>
     <p> <?php  for ($i=0; $i < count($maggio); $i++) { 
        echo "<br>$novembre[$i]";
    } ?> </p>

</body>
</html>