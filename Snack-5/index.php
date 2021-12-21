<!--

Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.

-->



<?php

$paragrafo= 
    'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maxime itaque maiores earum porro aperiam in voluptatibus eius est perspiciatis modi, libero esse expedita provident dicta dignissimos dolore labore quidem facilis dolores? Culpa facere dolorem magnam omnis nihil, esse temporibus expedita ad ab repellat deserunt repudiandae consequuntur facilis, incidunt voluptatem illum fugiat eveniet iure cum voluptate exercitationem minima. Omnis iure sequi corrupti incidunt vero rem sunt esse beatae asperiores modi eius odit aliquam ad quasi nesciunt sit et blanditiis, impedit ratione quo facere! Cumque in rerum, nesciunt inventore error, officia, eos neque laboriosam accusamus ratione adipisci eaque. A odio nam officiis aut, labore quia natus nostrum praesentium ipsam laboriosam nobis accusamus facilis ipsum cumque! Amet in, corporis cumque accusantium ipsam numquam animi porro quia provident excepturi debitis consequatur laboriosam incidunt quas explicabo perspiciatis architecto dicta, nostrum impedit nam iste! Odit veniam rerum cupiditate sint ab, velit voluptatum! Corporis assumenda praesentium ad debitis! Commodi, at veritatis. Rem nobis vero blanditiis obcaecati, temporibus neque incidunt officiis ipsa aperiam fuga fugit perferendis sed exercitationem praesentium architecto, voluptatibus similique! Nemo distinctio aut impedit id iste optio quae quia, sequi repellendus saepe, delectus ducimus, vero beatae. In magnam praesentium dolorem fuga officia qui eveniet reprehenderit quod!'
;

$paragrafoSplittato = explode(".", $paragrafo);

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
        <?php foreach($paragrafoSplittato as $paragraph){ ;?>
            <p> <?php echo $paragraph; ?></p>
            <?php }; ?>
    </div>
</body>
</html>