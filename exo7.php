<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="exo.css">
</head>
<body>
<form action="" method="GET">

Saisisez une valeur : <input type="text" name="saisie">
<input type="submit" value="Enter">
</form>

<?php

if (isset($_GET)) 
        {
  
            if (empty($_GET['saisie'])) 
            {
                echo "<div>No</div>";
            } 

            else 
            {
                $_SESSION['saisie']=$_GET['saisie'];
                echo "<div class='red'>Vous avez saisie le contenue suivant : ".$_GET['saisie']."</div>";
            }
        }

        ?>



    
</body>
</html>
