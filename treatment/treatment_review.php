<?php

session_start();

// Vérifier si l'utilisateur est connecté avant de traiter l'avis
if (!isset($_SESSION['user'])) {
    // Rediriger vers la page de connexion
    header('Location: ../index.php');
    exit();
}