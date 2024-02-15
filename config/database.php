<?php

try {
    $db = new PDO('mysql:host=localhost;dbname=comparo_simple', 'root', 'root');
    // $db = new PDO('mysql:host=localhost;dbname=comparo_simple', 'root', '');
} catch (PDOException $e) {
    echo 'Erreur de connexion : ' . $e->getMessage();
}

?>