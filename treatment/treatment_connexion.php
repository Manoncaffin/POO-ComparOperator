<?php

require_once('../config/autoload.php');
require_once('../config/database.php');

// page connect_interface
if(

    isset($_POST["author"]) && !empty($_POST["author"]) &&
    isset($_POST["password"]) && !empty($_POST["password"]) 
    
    ) {
   

        $user = new User([
        'author' => $_POST['author'],
        'password' => $_POST["password"],
        // à gauche : valeur du tableau associatif (clé) dans User.php// à droite : input name 
    ]);
    
    $manager = new Manager($db);
    $existingUser = $manager->connectUser($user);

    if (!$existingUser) {
        header('Location: ../new_user.php');
    } 



    if (password_verify($user->getPassword(), $existingUser['password'])) {
        $_SESSION['user_id'] = $existingUser['id'];
        header('Location: ../index.php');

    } else {
        echo "Votre mot de passe est incorrect.";
    }

}

?>