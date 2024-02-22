<?php

require_once('./config/autoload.php');
require_once('./config/database.php');

$manager = new Manager($db);
$operators = $manager->getAllOperator();

var_dump($operators);


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
                    <select name="location">
                        <option value="none" selected>--</option>
                        <option value="Rome">Rome</option>
                        <option value="Londres">Londres</option>
                        <option value="Monaco">Monaco</option>
                        <option value="Tunis">Tunis</option>
                        <option value="Istanbul">Istanbul</option>
                        <option value="Beirut">Beirut</option>
                    </select>

                    <select name="tour_operator_id">
                        <option value="none" selected>--</option>
                        <?php foreach($operators as $operator) {?>
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
            </form>
        </section>
        <footer>
            <p>Compar Opérator 2023</p>
        </footer>


    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>