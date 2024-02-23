<?php

require_once('./config/autoload.php');
require_once('./config/database.php');

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./dist/style.css">
    <title>Compar Opérator - Page admin</title>
</head>

<body>
    <header>
        <div class="logo background_logo">
            <img src="./img/logo_compar_operator.svg" alt="ComparOperator">
        </div>
    </header>

    <main>
        <section class="container vh-100 flex-column">
            <form action="./treatment/treatment_operator.php" method="post" class="form">
                <div class="form-group row d-flex justify-content-start">
                    <label for="text" class="col-auto col-form-label col-form-label-sm">Ajouter un Tour Opérator</label>
                    <select name="add_TO">
                        <option value="none" selected>--</option>
                        <option value="first">Salaun Holidays</option>
                        <option value="second">Fram</option>
                        <option value="third">Heliades</option>
                    </select>
                </div>

                <div class="form-group row d-flex justify-content-start">
                    <label for="text" class="col-auto col-form-label col-form-label-sm">Passer en premium</label>
                    <select name="choice_premium">
                        <option value="none" selected>--</option>
                        <option value="first">Oui</option>
                        <option value="second">Non</option>
                    </select>
                    <div>
                        <button class="btn mt-3" type="submit">Ajouter</button>
                    </div>
                </div>
            </form>


            <form action="./treatment/treatment_destination.php" method="post" class="form">
                <div class="form-group row d-flex justify-content-start">
                    <label for="text" class="col-auto col-form-label col-form-label-sm">Ajouter une destination</label>
                    <select name="add_TO">
                        <option value="none" selected>--</option>
                        <option value="first">Rome</option>
                        <option value="second">Londres</option>
                        <option value="third">Monaco</option>
                        <option value="third">Tunis</option>
                    </select>
                </div>

                <div class="form-group row d-flex justify-content-start">
                    <label for="text" class="col-auto col-form-label col-form-label-sm">Prix</label>
                    <input type="number" placeholder="€" name="price">
                </div>
                <div>
                    <button class="btn mt-3" type="submit">Ajouter</button>
                </div>

            </form>
            </section>
            <footer>
                <p>Compar Opérator 2023</p>
            </footer>
        

    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>