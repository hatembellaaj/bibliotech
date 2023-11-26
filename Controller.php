<?php
require 'Model.php';

$dbConnection = new mysqli("localhost", "votre_utilisateur", "votre_mot_de_passe", "bibliotech");

if ($dbConnection->connect_error) {
    die("Connection failed: " . $dbConnection->connect_error);
}

$model = new ContactModel($dbConnection);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $model->saveContact($firstName, $lastName, $email, $message);

    // Redirection ou affichage d'un message de succès
    // ...
}
?>
