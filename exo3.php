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
<table border="1">
    <?php
        $tableau[0][0]="nom";
        $tableau[0][1]="prénom";
        $tableau[0][2]="MDP";

        echo'<tr>';

        for ($i=0; $i < 3 ; $i++) { 
            echo "<th>".$tableau[0][$i]."</th>";
        }
        echo'</tr>';
    ?>
    <?php
        $tableau[1][0]="LECRONIER";
        $tableau[1][1]="ELOISE";
        $tableau[1][2]="LLAMA";

        echo'<tr>';

        for ($i=0; $i < 3 ; $i++) { 
            echo "<th>".$tableau[1][$i]."</th>";
        }
        echo'</tr>';
    ?>
    <?php
        $tableau[2][0]="Flandre";
        $tableau[2][1]="Victor";
        $tableau[2][2]="Calin";

        echo'<tr>';

        for ($i=0; $i < 3 ; $i++) { 
            echo "<th>".$tableau[2][$i]."</th>";
        }
        echo'</tr>';
    ?>
    <?php
        $tableau[3][0]="GREMONT";
        $tableau[3][1]="Alexandre";
        $tableau[3][2]="SN0";

        echo'<tr>';

        for ($i=0; $i < 3 ; $i++) { 
            echo "<th>".$tableau[3][$i]."</th>";
        }
        echo'</tr>';
    ?>
    <?php
        $tableau[4][0]="GREMONT";
        $tableau[4][1]="Alexandre";
        $tableau[4][2]="SN0";

        echo'<tr>';

        for ($i=0; $i < 3 ; $i++) { 
            echo "<th>".$tableau[4][$i]."</th>";
        }
        echo'</tr>';

        
    ?>
</table>
</body>
</html>