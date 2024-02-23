<?php
require_once "../config/autoload.php";
require_once "../config/database.php";


// Démarrer la session


// Vérifier si l'utilisateur est connecté
$userIsLoggedIn = isset($_SESSION['user_id']);


// Si l'utilisateur n'est pas connecté, désactiver les champs du formulaire
$disabledAttribute = $userIsLoggedIn ? '' : 'disabled';


$tour_operator_id = isset($_GET['tour_operator_id']) ? $_GET['tour_operator_id'] : null;


$manager = new Manager($db);
$tour_operator = $manager->getOperatorById($tour_operator_id);


$_SESSION['tour_operator_id'] = $tour_operator_id;

// var_dump($tour_operator);



if (!$tour_operator) {
    header('Location: ../index.php');
    exit;
}

$reviews = $manager->getReviewByOperatorId($tour_operator_id);
// var_dump($reviews);

// Calculer la note moyenne
$total_grades = 0;


// var_dump($users);
$average_grade = count($reviews) > 0 ? $total_grades / count($reviews) : 0;

$price = $manager->getAveragePriceByOperatorId($tour_operator_id);
// var_dump($price);

// Récupérer l'ID de la destination depuis l'URL
$destination_id = isset($_GET['destination_id']) ? $_GET['destination_id'] : null;

// Assurez-vous que l'ID de la destination est défini avant de construire le lien de retour
$back_link_url = isset($id) ? "destination.php?destination_id=$id" : "../index.php"; // Si l'ID est défini, le lien de retour pointe vers la destination avec cet ID, sinon vers la page d'accueil
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
<div id="tour_operator">
<header id=header>
        <div class="logo">
            <a href="../index.php"><img src="../img/logo_compar_operator.svg" alt="Logo ComparOperator"></a>
        </div>
        <nav>
            <ul>
                <?php if (!$userIsLoggedIn) { ?>
                <li><a href="connect_interface.php">Me connecter</a></li>
                <?php } ?>
            </ul>
        </nav>
    </header>
    <div class="revenir__arriere">
    <a href="/destination.php?destination_id=<?php echo $destination_id; ?>" class="back-link">&#8592; Retour à la destination</a>
</div>


    <h1><?php echo $tour_operator['name']; ?></h1>

    <div class="tour-operator-info">
    <a href="<?php echo $tour_operator['link']; ?>"></a> 
    <?php
// Récupérer les informations du tour opérateur depuis la base de données
// Suppose que vous avez déjà une connexion à la base de données et que vous avez récupéré les informations du tour opérateur dans $tour_operator

$is_premium = $tour_operator['is_premium'];

// Vérifier si le tour opérateur est premium
if ($is_premium) {
    // Afficher le lien vers le site officiel du tour opérateur
    echo '<a href="' . $tour_operator['link'] . '">Visitez le site officiel</a>';
}
?>
           
    <img src="../img/<?php echo $tour_operator['name'] . ".png" ?>" alt="image">

        <p>Note moyenne : <?php echo $average_grade; ?></p>
        <p>Prix moyen des destinations : <?php echo $price['price']?> €</p>
        <h2>Avis d'autres utilisateurs :</h2>
        <ul>
            <?php foreach ($reviews as $review) { ?>
                <li>
                    <p>Auteur : <?php echo $review['author'] ?></p>
           
                        <p>Message : <?php echo $review['message']; ?></p>
                        <p>Note : <?php echo $review['grade']; ?></p>
    
                </li>
            <?php } ?>
        </ul>
    </div>

    <div class="write-review">
        <h2>Ecrire une review :</h2>
        <form action="../treatment/submit_review.php" method="post">
            
            <textarea name="message" placeholder="Votre avis" required<?php echo $disabledAttribute; ?>></textarea>
            <input type="number" name="grade" min="1" max="5" placeholder="Votre note (1-5)" required>
            <input type="hidden" name="tour_operator_id" value="<?php echo $tour_operator_id; ?>">
            <button a href="tour_operator.php" type="submit"  <?php echo $disabledAttribute; ?>>Envoyer</button>
        </form>

        <?php
    // Afficher un message si l'utilisateur n'est pas connecté
    if (!$userIsLoggedIn) {
        echo "Connectez-vous pour laisser un avis.";
    }
    ?>
    </div>

    <?php if ($tour_operator['is_premium']) : ?>
        <div class="premium-link">
            <a href="<?php echo $tour_operator['link']; ?>">Visitez le site officiel</a>
        </div>
    <?php endif; 
    include "../partials/footer.php";
    ?>

    