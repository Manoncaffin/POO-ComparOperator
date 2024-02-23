<?php

require_once "../config/autoload.php";
require_once "../config/database.php";

$destination_id = isset($_GET['destination_id']) ? $_GET['destination_id'] : null;


$manager = new Manager($db);
$destination = $manager->getDestinationById($destination_id);



if (!$destination) {
    header('Location: ../index.php');
    exit;
}

$tour_operators = $manager->getOperatorByDestination($destination_id);



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../dist/style.css">
    <title>Destinations</title>
</head>

<body>
    <div id="destination">
        <header id=header>
            <div class="logo">
                <a href="../index.php"><img src="../img/logo_compar_operator.svg" alt="Logo ComparOperator"></a>
            </div>
            <nav>
                <ul>
                    <li><a href="../connect_interface.php">Me connecter</a></li>
                </ul>
            </nav>
        </header>
        <a href="destination.php" class="back-link">&#8592; Retour aux destinations</a>
        <h1><?php echo $destination['location']; ?></h1>

        <div class="destination-info">

            <img src="../img/<?php echo $destination['location'] . ".webp" ?>" alt="image">
            <p>Prix à partir de <?php echo $destination['price']; ?> €</p>
        </div>

        <div class="tour-operators">
            <h2>Tours Opérateurs :</h2>
            <ul>

                <?php foreach ($tour_operators as $operator) :
                    // Récupérer les informations du tour opérateur depuis la base de données
                    // Suppose que vous avez déjà une connexion à la base de données et que vous avez récupéré les informations du tour opérateur dans $tour_operator

                    $is_premium = $operator['is_premium'];

                    // Vérifier si le tour opérateur est premium
                    if ($is_premium) {
                        // Afficher le lien vers le site officiel du tour opérateur
                        echo '<a href="' . $operator['link'] . '">Visitez le site officiel</a>';
                        
                    }
                ?>
                    <li>

                        <img src="../img/<?php echo $operator['name'] . "__small.png" ?>" alt="image">


                        <?php echo $operator['name']; ?>

                        <!-- prix  -->
                        <button class="button__voir"><a href="./tour_operator.php?tour_operator_id=<?php echo $operator['id']; ?>">Voir</a></button>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

    <?php include "../partials/footer.php";
