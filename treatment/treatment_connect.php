<?php

// cette page récupère les infos 
require_once('../config/autoload.php');
require_once('../config/database.php');

session_start(); // car $_SESSION['id_employe'] dans employeManager.php

if(

isset($_POST["author"]) && !empty($_POST["author"]) &&
isset($_POST["password"]) && !empty($_POST["password"]) 

) {

    $review = new Review($db);
    $review = new Review([
    'author' => $_POST['author'],
    'password' => $_POST['password'],
    // à gauche : valeur du tableau associatif (clé) dans employe.php// à droite : input name 
]);

$Manager->add($review);

header('Location: ./connect_interface.php');

}

?>