<!--

Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta

-->


<?php
function newRandomArray($min, $max, $nNumb){
    $nuovoArray = [];
    if (($max - $min) < $nNumb) {
        $nNumb = $max - $min;
    }
    while(count($nuovoArray) < $nNumb){
        $numero = rand($min, $max);
        if (!in_array($numero,$nuovoArray)) {
            $nuovoArray[] = $numero;
        }
    }
    return $nuovoArray;
}

var_dump(newRandomArray(1,100,50));

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
    
</body>
</html>