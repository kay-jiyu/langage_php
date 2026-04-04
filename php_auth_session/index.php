<?php 
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Recettes</title>
    </head>

    <body>
    <h1>Bienvenue</h1>

        <?php
         if (isset($_SESSION['user'])) {
            echo "Salut " . $_SESSION['user'] . "<br>";
            echo '<a href="logout.php">Se déconnecter</a>';
        } else {
            echo '<a href="login.php">Se connecter</a>';
        }
?>

    </body>
</html>