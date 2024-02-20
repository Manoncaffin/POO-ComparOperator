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
    <link rel="stylesheet" href="./dist/style.css">
    <title>Compar Opérator - Page de connexion</title>
</head>

<body>
    <header>
        <div class="logo">
            <img src="./img/logo_compar_operator.svg" alt="ComparOperator">
        </div>
    </header>

    <main>

        <section class="container vh-100 d-flex flex-column justify-content-around">
            <div>
                <form action="./treatment/treatment_connect.php" method="post" class="form">
                    <div class="avatar">
                        <img src="./img/avatar.jpeg" alt="avatar">
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Pseudo" name="author" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Mot de passe" name="password" class="form-control">
                    </div>

                    <div class="connect">
                        <div>
                            <button class="btn btn-primary" type="submit">Se connecter</button>
                        </div>
                        <div>
                            <p>Nouvel utilisateur ?</p>
                        </div>
                        <div>
                            <p><a href="#" class="text-decoration-none text-black">S'inscrire</a></p>
                        </div>
                    </div>
                </form>
            </div>
            <footer>
                <p>Compar Opérator 2023</p>
            </footer>
        </section>


    </main>

</body>

</html>