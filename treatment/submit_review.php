<?php
// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $tour_operator_id = $_POST['tour_operator_id'];
    $author = $_POST['author'];
    $message = $_POST['message'];

    // Connexion à la base de données
    $servername = "localhost";
    $username = "votre_nom_utilisateur";
    $password = "votre_mot_de_passe";
    $dbname = "comparo_simple";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Vérifier la connexion
    if ($conn->connect_error) {
        die("La connexion a échoué : " . $conn->connect_error);
    }

    // Préparer la requête SQL pour insérer l'avis dans la base de données
    $sql = "INSERT INTO review (message, author, tour_operator_id) VALUES ('$message', '$author', '$tour_operator_id')";

    // Exécuter la requête SQL
    if ($conn->query($sql) === TRUE) {
        echo "Votre avis a été soumis avec succès.";
    } else {
        echo "Erreur : " . $sql . "<br>" . $conn->error;
    }

    // Fermer la connexion à la base de données
    $conn->close();
}
?>
