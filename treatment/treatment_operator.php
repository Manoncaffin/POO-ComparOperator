<?php

// cette page récupère les infos 
require_once('../config/autoload.php');
require_once('../config/database.php');

if(isset($_POST['name']) && 
isset($_POST['link']) &&
isset ($_POST['grade_count']) &&
isset ($_POST['grade_total']) &&
isset ($_POST['is_premium'])) {

$tourOperator = new TourOperator ([
    'name' => $_POST['name'],
    'link' => $_POST['link'],
    'grade_count' => $_POST['grade_count'],
    'grade_total' => $_POST['grade_total'],
    'is_premium' => $_POST['is_premium'],
]);

var_dump($tourOperator);

    $adminManager = new AdminManager($db);
    $adminManager->createTourOperator($tourOperator);
    $adminManager->updateOperatorToPremium($tourOperator);
}

?>