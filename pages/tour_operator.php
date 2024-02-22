<?php
require_once "../config/autoload.php";
require_once "../config/database.php";

$tour_operator_id = isset($_GET['tour_operator_id']) ? $_GET['tour_operator_id'] : null;


$manager = new Manager($db);
$tour_operator = $manager->getOperatorById($tour_operator_id);

// var_dump($tour_operator);



if (!$tour_operator) {
    header('Location: ../index.php');
    exit;
}

$reviews = $manager->getReviewByOperatorId($tour_operator_id);
// var_dump($reviews);

// Calculer la note moyenne
$total_grades = 0;
$users = [];
foreach ($reviews as $review) {
    $total_grades += $review['grade'];
    $users[] = $manager->getUserById($review['author_id']);
}

// var_dump($users);
$average_grade = count($reviews) > 0 ? $total_grades / count($reviews) : 0;

$price = $manager->getAveragePriceByOperatorId($tour_operator_id);
// var_dump($price);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./dist/style.css">
    <title><?php echo $tour_operator['name']; ?></title>
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

    <h1><?php echo $tour_operator['name']; ?></h1>

    <div class="tour-operator-info">
        <p>Note moyenne : <?php echo $average_grade; ?></p>
        <p>Prix moyen des destinations : <?php echo $price['price']?> €</p>
        <h2>Avis d'autres utilisateurs :</h2>
        <ul>
            <?php foreach ($users as $user) { ?>
                <li>
                    <p>Auteur : <?php echo $user['author'] ?></p>
                    <?php foreach ($reviews as $review) { ?>
                        <p>Message : <?php echo $review['message']; ?></p>
                        <p>Note : <?php echo $review['grade']; ?></p>
                    <?php } ?>
                </li>
            <?php } ?>
        </ul>
    </div>

    <div class="write-review">
        <h2>Ecrire une review :</h2>
        <form action="submit_review.php" method="post">
            <input type="text" name="author" placeholder="Votre nom" required>
            <textarea name="message" placeholder="Votre avis" required></textarea>
            <input type="number" name="grade" min="1" max="5" placeholder="Votre note (1-5)" required>
            <input type="hidden" name="tour_operator_id" value="<?php echo $tour_operator_id; ?>">
            <button type="submit">Envoyer</button>
        </form>
    </div>

    <?php if ($tour_operator['is_premium']) : ?>
        <div class="premium-link">
            <a href="<?php echo $tour_operator['link']; ?>">Visitez le site officiel</a>
        </div>
    <?php endif; ?>

    <footer>
        <p>ComparOperator 2024.</p>
    </footer>
</body>

</html>