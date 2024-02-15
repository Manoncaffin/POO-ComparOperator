<?php

require_once('./config/autoload.php');
require_once('./config/database.php');
require_once('./connect_interface.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./appearance/style.css">
    <title>Compar Opérator - Page de connexion</title>
</head>
<body>

<main>

<form action="./treatment/treatment_connect.php" method="post">
            <div class="d-flex justify-content-start row px-5">
                <div class="name d-flex justify-content-start pt-5 pb-2">
                    <input type="text" placeholder="Pseudo" name="author" class="px-2 rounded-2 border border-dark-subtle">
                </div>

                <div class="name d-flex justify-content-start pt-5 pb-2">
                    <input type="text" placeholder="Mot de passe" name="password" class="px-2 rounded-2 border border-dark-subtle">
                </div>

                <div class="d-flex justify-content-start pt-5">
                    <button class="btn btn-primary" type="submit" href="./index.php">Se connecter</button>
                </div>
            </div>
        </form>


        <footer class="">
                <p>Compar Opérator 2023</p>
        </footer>
</main>
    
</body>
</html>