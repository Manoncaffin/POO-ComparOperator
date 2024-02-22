<?php

// cette page récupère les infos 
require_once('../config/autoload.php');
require_once('../config/database.php');

if(isset($_POST['location']) && 
isset($_POST['price']) &&
isset ($_POST['tour_operator_id'])) {


$destination = new Destination([
    'location' => $_POST['location'],
    'price' => $_POST['price'],
    'tour_operator_id' => intval($_POST['tour_operator_id']),
]);
var_dump($destination);

    $adminManager = new AdminManager($db);
    $adminManager->createDestination($destination);


}
 


?>