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
    <link rel="stylesheet" href="./dist/style.css">
    <title>Tour Operators for <?php echo $destination['location']; ?></title>
</head>

<body>
    <header>
        <div class="logo">
            <a href="../index.php"><img src="./img/logo_compar_operator.svg" alt="Logo ComparOperator"></a>
        </div>
        <nav>
            <ul>
                <li><a href="./tour_operators.php">Tours Opérateurs</a></li>
                <li><a href="./connect_interface.php">Me connecter</a></li>
            </ul>
        </nav>
    </header>

    <h1>Tours Opérateurs pour <?php echo $destination['location']; ?></h1>

    <div class="destination-info">
        <h2><?php echo $destination['location']; ?></h2>
        <p>Prix à partir de <?php echo $destination['price']; ?> €</p>
    </div>

    <div class="tour-operators">
        <h2>Tours Opérateurs :</h2>
        <ul>
            <?php foreach ($tour_operators as $operator) : ?>
                <li>
                    <a href="<?php echo $operator['link']; ?>">
                        <?php echo $operator['name']; ?>
                    </a>
<!-- prix  -->
                    <button><a href="./tour_operator.php?tour_operator_id=<?php echo $operator['id']; ?>">Voir</a></button>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

    <footer>
        <p>ComparOperator 2024.</p>
    </footer>
</body>

</html>
