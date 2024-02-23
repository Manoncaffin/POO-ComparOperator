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
            <!-- <form action="./treatment/treatment_operator.php" method="post" class="form">
                <div class="form-group admin row d-flex justify-content-start flex-column">
                    <label for="name" class="col-auto col-form-label col-form-label-sm">Nom du Tour Opérateur</label>
                    <input type="text" name="name" required>
                </div>

                <div class="form-group admin row d-flex justify-content-start flex-column">
                    <label for="link" class="col-auto col-form-label col-form-label-sm">Lien</label>
                    <input type="text" name="link" required>
                </div>

                <div class="form-group admin row d-flex justify-content-start flex-column">
                    <label for="gradeCount" class="col-auto col-form-label col-form-label-sm">Nombre de notes</label>
                    <input type="number" name="gradeCount" required>
                </div>

                <div class="form-group admin row d-flex justify-content-start flex-column">
                    <label for="gradeTotal" class="col-auto col-form-label col-form-label-sm">Total des notes</label>
                    <input type="number" name="gradeTotal" required>
                </div>

                <div class="form-group admin row d-flex justify-content-start flex-column">
                    <label for="isPremium" class="col-auto col-form-label col-form-label-sm">Premium</label>
                    <select name="isPremium" required>
                        <option value="1">Oui</option>
                        <option value="0">Non</option>
                    </select>
                </div>

                <div>
                    <button class="btn mt-3" type="submit">Ajouter Tour Opérateur</button>
                </div>
            </form>

            <form action="./treatment/treatment_operator.php" method="post" class="form">
                <div class="form-group admin row d-flex justify-content-start">
                    <label for="text" class="col-auto col-form-label col-form-label-sm">Changer le Tour Opérator</label>
                    <select name="tour_operator_id">
                        <option value="none" selected>--</option>
                        <option value="tour_operator_id">Salaun Holidays</option>
                        <option value="tour_operator_id">Fram</option>
                        <option value="tour_operator_id">Heliades</option>
                    </select>
                </div>

                <div class="form-group admin row d-flex justify-content-start">
                    <label for="text" class="col-auto col-form-label col-form-label-sm">Passer en premium</label>
                    <select name="is_premium">
                        <option value="none" selected>--</option>
                        <option value="first">Oui</option>
                        <option value="second">Non</option>
                    </select>
                    <div>
                        <a href="./treatment/treatment_destination.php" class="text-decoration-none text-black"><button class="btn mt-3" type="submit">Ajouter</button></a>
                    </div>
                </div>
            </form>


            <form action="./treatment/treatment_destination.php" method="post" class="form">
                <div class="form-group admin row d-flex justify-content-start">
                    <label for="text" class="col-auto col-form-label col-form-label-sm">Sélectionner une destination</label>
                    <select name="tour_operator_id">
                        <option value="none" selected>--</option>
                        <?php foreach ($operators as $operator) { ?>
                            <option value="<?php echo $operator['id'] ?>"><?php echo $operator['name'] ?> </option>
                        <?php  }  ?>
                    </select>

                    <div class="form-group admin row d-flex justify-content-start">
                        <label for="text" class="col-auto col-form-label col-form-label-sm">Prix</label>
                        <input type="number" placeholder="€" name="price">
                    </div>
                    <div>
                        <a href="./treatment/treatment_operator.php" class="text-decoration-none text-black"><button class="btn mt-3" type="submit">Ajouter</button></a>
                    </div>
                </div>
            </form> -->


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
                        <input type="number" name="gradeCount" required class="w-100">
                    </div>
                    <div class="name-field">
                        <label for="gradeTotal">Total des points</label>
                        <input type="number" name="gradeTotal" required class="w-100">
                    </div>
                    <div class="name-field">
                        <label>Premium</label>
                        <select name="isPremium" required class="w-100">
                            <option value="none" selected>--</option>
                            <option value="1">Oui</option>
                            <option value="0">Non</option>
                        </select>
                    </div>

                    <!-- AJOUTER LIEN  -->
                    <div>
                        <a href="#" class="text-decoration-none text-black"><button class="btn mt-3" type="submit">Ajouter Tour Opérator</button></a>
                    </div>

                    <hr>

                    <div class="name-field">
                        <label for="text">Sélectionner un Tour Opérator</label>
                        <select name="tour_operator_id" required class="w-100">
                            <option value="none" selected>--</option>
                            <option value="tour_operator_id">Salaun Holidays</option>
                            <option value="tour_operator_id">Fram</option>
                            <option value="tour_operator_id">Heliades</option>
                        </select>
                    </div>
                    <div class="name-field">
                        <label for="text">Premium</label>
                        <select name="isPremium" required class="w-100">
                            <option value="none" selected>--</option>
                            <option value="1">Oui</option>
                            <option value="0">Non</option>
                        </select>
                    </div>
                    <!-- AJOUTER LIEN -->
                    <div>
                        <a href="#" class="text-decoration-none text-black"><button class="btn mt-3" type="submit">Valider les modifications</button></a>
                    </div>
                </form>

                <hr>
                <!-- REVOIR -->
                <form action="./treatment/treatment_destination.php" method="post" class="form-admin">
                    <div class="name-field">
                        <label for="text">Sélectionner une destination</label>
                        <select name="tour_operator_id" required class="w-100">
                            <option value="none" selected>--</option>
                            <option value="location">Londres</option>
                            <option value="location">Vienne</option>
                            <option value="location">Rome</option>
                            <option value="location">Monaco</option>
                            <option value="location">Tunis</option>
                        </select>

                    </div>

                    <div class="name-field">
                        <label>Ajouter une destination</label>
                        <select name="destination" required class="w-100">>
                            <option value="none" selected>--</option>
                            <?php foreach ($destinations as $destination) { ?>
                                <option value="<?php echo $destination['location'] ?>"><?php echo $destination['name'] ?> </option>
                            <?php  }  ?>
                        </select>
                    </div>
                    <!-- FIN _ -->

                    <div class="name-field">
                        <label for="text">Prix</label>
                        <input type="number" required placeholder="€" name="price" required class="w-100">
                    </div>
                    <div>
                        <a href="./treatment/treatment_operator.php" class="text-decoration-none text-black"><button class="btn mt-3" type="submit">Valider les modifications</button></a>
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