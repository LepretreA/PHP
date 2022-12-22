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
<form action="" method="POST">

Saisisez une valeur : <input type="text" name="saisie">
<input type="submit" value="Enter">
</form>

<?php
if (!empty($_POST)) 
        {
  
            if (empty($_POST['saisie'])) 
            {
                echo "<div>Il n'y a pas de texte !</div>";
            } 

            else 
            {
                echo "<div class='red'>Vous avez saisie le contenue suivant : ".$_POST['saisie']."</div>";
            }
        }

        ?>



    
</body>
</html>
