<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="exo.css">
</head>
<body>
    
    <?php

    echo "coucou";

    $Nbr = rand(0,100);

    if ($Nbr%2 == 0){
        echo '<div class="blue">le nombre : '.$Nbr.' est pair.</div>';
    }else{
        echo '<div class="red">le nombre : '.$Nbr.' est impair.</div>';
    }

    ?>

</body>
</html>