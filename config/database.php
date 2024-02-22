<?php

try {
    // $db = new PDO('mysql:host=localhost;dbname=comparo-simple', 'root', 'root');
     $db = new PDO('mysql:host=localhost;dbname=comparo-simple', 'root', '');
} catch (PDOException $e) {
    echo 'Erreur de connexion : ' . $e->getMessage();
}

?>