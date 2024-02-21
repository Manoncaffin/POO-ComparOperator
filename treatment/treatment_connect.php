<?php

// cette page récupère les infos 
require_once('../config/autoload.php');
require_once('../config/database.php');

if(

isset($_POST["author"]) && !empty($_POST["author"]) &&
isset($_POST["password"]) && !empty($_POST["password"]) 

) {
    $passwordHash = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $user = new User([
    'author' => $_POST['author'],
    'password' => $passwordHash,
    // à gauche : valeur du tableau associatif (clé) dans employe.php// à droite : input name 
]);

$manager = new Manager($db);

$manager->addUser($user);

header('Location: ../connect_interface.php');

}

?>