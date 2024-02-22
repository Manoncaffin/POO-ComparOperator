<?php

require_once "./config/autoload.php";
require_once "./config/database.php";

$manager = new Manager($db);
$alldestinations = $manager->getAllDestination();


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./dist/style.css">
    <title>Destinations</title>
</head>

<body>
    <header>
        <div class="logo">
            <a href="index.php"><img src="./img/logo_compar_operator.svg" alt="Logo ComparOperator"></a>
        </div>
        <nav>
            <ul>
                <li><a href="tour_operators.php">Tours Opérateurs</a></li>
                <li><a href="login.php">Me connecter</a></li>
            </ul>
        </nav>
    </header>
    <h1>Destinations</h1>
    <div class="destinations">

        <?php foreach ($alldestinations as $alldestination) { ?>
            <!-- <?php var_dump($alldestination) ?> -->
            <article>
                <div class="destination__container">
                    <div class="destination__image">
                        <a href="./pages/destination.php?destination_id=<?php echo $alldestination['id']; ?>">
                            <img src="./img/<?php echo $alldestination['location'] . ".webp" ?>" alt="image">
                        </a>
                    </div>

                    <div class="destination__informations">
                        <div>
                            <p><?php echo $alldestination['location'] ?></p>
                            <p> Loreem ipsum, dolor sit amet consectetur adipisicing elit. Maxime quam ex beatae debitis neque.se.
                        </div>
                        <div>
                            <p>A partir de <?php echo $alldestination['price'] ?> €</p>
                        </div>

                    </div>
            </article>
        <?php } ?>
    </div>
    <footer>
        <p>ComparOperator 2024.</p>
    </footer>
</body>

</html>