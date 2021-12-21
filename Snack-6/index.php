<!--

Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.

-->


<?php

$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
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
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        h2{
            margin-bottom: 40px;
        }
        ul{
            list-style: none;
        }
        .insegnanti, .pm {
            float: left;
            padding: 40px;
            text-align: center;
            width: 50%;    
            color: white;
            height: 300px;
        }
        .pm{
            background-color: green;
        }
        .insegnanti{
            background-color: gray;
        }
    </style>
</head>
<body>
    <div class="insegnanti">
      <h2>Teachers</h2>
        <ul>
            <?php foreach ($db['teachers'] as $teacher){ ?>
                <li>
                    <?php echo $teacher['name'];?>
                    <?php echo $teacher['lastname'];?>
                </li>
            <?php }; ?>
        </ul>
    </div>
    <div class="pm">
        <h2>Pm</h2>
        <ul>
            <?php foreach ($db['pm'] as $sPm){ ?>
                <li>
                    <?php echo $sPm['name'];?>
                    <?php echo $sPm['lastname'];?>
                </li>
            <?php }; ?>
        </ul>
    </div>
</body>
</html>