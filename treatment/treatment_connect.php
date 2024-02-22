<?php

// cette page récupère les infos 
require_once('../config/autoload.php');
require_once('../config/database.php');

if(

isset($_POST["author"]) && !empty($_POST["author"]) &&
isset($_POST["password"]) && !empty($_POST["password"]) &&
isset($_POST["confirm_password"]) && !empty($_POST["confirm_password"])

) {
    $passwordHash = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $user = new User([
    'author' => $_POST['author'],
    'password' => $passwordHash,
    // à gauche : valeur du tableau associatif (clé) dans User.php// à droite : input name 
]);

$confirmPassword = $_POST["confirm_password"];

 // Vérifiez si les deux champs de mot de passe sont identiques
 if ($user->getPassword() === $confirmPassword) {
    // Les mots de passe sont identiques, procédez au traitement
    $manager = new Manager($db);
    $manager->addUser($user);

    header('Location: ../index.php');
    exit();

} else {
    echo "Les mots de passe ne correspondent pas.";
}
} else {
echo "Veuillez remplir tous les champs obligatoires.";

header('Location: ../index.php');
exit();

}

?>