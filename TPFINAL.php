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
    <?php
    if (isset($_POST["Exit"])) {
        session_unset();
        session_destroy();
    }
    if (isset($_POST["Enter"]) && $_POST["MDP"] == "1234" && $_POST["login"] == "Julien") {
        $_SESSION["EtatConnexion"] = true;
    }

    if (isset($_SESSION["EtatConnexion"]) && $_SESSION["EtatConnexion"] == true) {
    ?>

        <p>Bienvenue sur le site 'refait'.</p>

        <form action="" method="POST">
            <input type="submit" value="Exit" name="Exit">
        </form>
    <?php
    } else {
    ?>
        <form action="" method="POST">
            login : <input type="text" name="login" id="login" />
            MDP : <input type="password" name="MDP" id="MDP" />
            <input type="submit" name="Enter" value="Enter" />
        </form>
    <?php
    }

    if (isset($_POST["Enter"]))
    {
        if ($_POST["login"] != "Julien") {
            echo "<p>Ce n'est pas le bon Login !</p>";
        }
        if ($_POST["MDP"] != "1234") {
            echo "<p>Ce n'est pas le bon mdp !</p>";
        }
    }
    ?>
</body>

</html>