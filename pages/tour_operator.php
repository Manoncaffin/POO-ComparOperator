<?php
require_once "../config/autoload.php";
require_once "../config/database.php";

$tour_operator_id = isset($_GET['tour_operator_id']) ? $_GET['tour_operator_id'] : null;


$manager = new Manager($db);
$tour_operator = $manager->getOperatorById($tour_operator_id);

var_dump($tour_operator);



if (!$tour_operator) {
    header('Location: ../index.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../dist/style.css">
    <title><?php echo $tour_operator['name']; ?></title>
</head>

<body>
    <header>
        <div class="logo">
            <a href="../index.php"><img src="./img/logo_compar_operator.svg" alt="Logo ComparOperator"></a>
        </div>
        <nav>
            <ul>
                <li><a href="./tour_operator.php">Tours Opérateurs</a></li>
                <li><a href="./connect_interface.php">Me connecter</a></li>
            </ul>
        </nav>
    </header>

    <h1><?php echo $tour_operator['name']; ?></h1>

    <div class="tour_operator-info">
        
    </div>

    <footer>
        <p>ComparOperator 2024.</p>
    </footer>
</body>

</html>