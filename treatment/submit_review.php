<?php

require_once("../config/autoload.php");
require_once("../config/database.php");

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 


$review = new Review([
    'author' => $_SESSION['user_id'],
    'message' =>  $_POST['message'],
    'tour_operator_id' => $_POST['tour_operator_id'],
    'grade' => $_POST['grade'],
]);



$manager = new Manager($db);
$manager->createReview($review);

header('Location: ../pages/tour_operator.php?tour_operator_id='. $_SESSION['tour_operator_id']);

}



   

    
?>
