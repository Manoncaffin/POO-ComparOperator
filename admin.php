<?php

require_once('./config/autoload.php');
require_once('./config/database.php');

$manager = new Manager($db);
$operators = $manager->getAllOperator();

// var_dump($operators);


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


<header>
    <div class="logo background_logo">
        <a href="./index.php"><img src="./img/logo_compar_operator.svg" alt="ComparOperator"></a>
    </div>
</header>

<body class="body-admin">

    <main>

        <section class="flex-column">
            <div class="container">

                <form action="./treatment/treatment_operator.php" method="post" class="form-admin">
                    <h4>Page admin</h4>
                    <hr>
                    <div class="name-field">
                        <label for="name">Nom du Tour Opérator</label>
                        <input type="text" name="name" required class="w-100">
                    </div>
                    <div class="name-field">
                        <label for="link">Lien vers le Tour Opérator</label>
                        <input type="text" name="link" placeholder="@" class="w-100">
                    </div>
                    <div class="name-field">
                        <label for="gradeCount">Nombre de notes</label>
                        <input type="number" name="grade_count" required class="w-100">
                    </div>
                    <div class="name-field">
                        <label for="gradeTotal">Total des points</label>
                        <input type="number" name="grade_total" required class="w-100">
                    </div>
                    <div class="name-field">
                        <label for="is_premium">Premium</label>
                        <select name="is_premium" required class="w-100">
                            <option value="none" selected>--</option>
                            <option value="1">Oui</option>
                            <option value="0">Non</option>
                        </select>
                    </div>

                    <!-- AJOUTER LIEN  -->
                    <div>
                        <button class="btn mt-3" type="submit">Ajouter Tour Opérator</button>
                    </div>

                    <hr>

                    <div class="name-field">
                        <label for="tour_operator_id">Sélectionner un Tour Opérator</label>
                        <select name="tour_operator_id" required class="w-100">
                            <option value="none" selected>--</option>
                            <?php foreach ($operators as $operator) { ?>
                                <option value="<?php echo $operator['id'] ?>"><?php echo $operator['name'] ?> </option>
                            <?php  }  ?>
                        </select>
                    </div>
                    <div class="name-field">
                        <label for="update_premium">Premium</label>
                        <select name="update_premium" required class="w-100">
                            <option value="none" selected>--</option>
                            <option value="1">Oui</option>
                            <option value="0">Non</option>
                        </select>
                    </div>
                    <!-- AJOUTER LIEN -->
                    <div>
                        <button class="btn mt-3" type="submit">Valider les modifications</button>
                    </div>
                </form>

                <hr>
                <!-- REVOIR -->
                <form action="./treatment/treatment_destination.php" method="post" class="form-admin">
                    <div class="name-field">
                        <label>Ajouter une destination</label>
                        <input type="text" name="location" required class="w-100">
                        
                    </div>
                    <!-- FIN _ -->

                    <div class="name-field">
                        <label for="text">Prix</label>
                        <input type="number" required placeholder="€" name="price" required class="w-100">
                    </div>
                    <div>
                        <button class="btn mt-3" type="submit">Valider les modifications</button>
                    </div>
                </form>

                <footer class="d-flex justify-content-start mt-5">
                    <p>Compar Opérator 2023</p>
                </footer>

            </div>

        </section>

    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>