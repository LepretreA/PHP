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

        $array=
        [
            0=>5,
            1=>57,
            2=>3,
            3=>800,
            4=>4,
        ];
        echo "<tr>";
        for ($i=0; $i < sizeof($array) ; $i++) { 
            echo "<th>".$array[$i]."</th>";
        }
        echo "</tr>";
        
    ?>
</table>
<table border="1">
    <?php
        $Lucas=
        [
            0=>'BURGUET LE SAINT SAUVEUR  #DEUSVULT',
            1=>'LUCAS LE SAINT DEMI MORT',
            2=>'654321',
        ];
        echo "<tr>";
        for ($i=0; $i < sizeof($Lucas) ; $i++) { 
            echo "<th>".$Lucas[$i]."</th>";
        }
        echo "</tr>";

        
    ?>
    

    
    
</table>



</body>
</html>