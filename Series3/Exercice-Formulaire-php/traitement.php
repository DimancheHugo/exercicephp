<?php
// Vérification si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données du formulaire
    $nom = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '';
    $prenom = isset($_POST['prénom']) ? htmlspecialchars($_POST['prénom']) : '';
    $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
    $password = isset($_POST['password']) ? htmlspecialchars($_POST['password']) : '';
    $ageCheck = isset($_POST['ageCheck']) ? $_POST['ageCheck'] : '';

    // Affichage des données
    echo '<div class="container mt-5">';
    echo '<h2 class="text-center">Données soumises :</h2>';
    echo '<div class="row">';
    echo '<div class="col-md-6">';
    echo '<strong>Nom :</strong> ' . $nom . '<br>';
    echo '<strong>Prénom :</strong> ' . $prenom . '<br>';
    echo '<strong>Email :</strong> ' . $email . '<br>';
    echo '<strong>Mot de passe :</strong> ' . $password . '<br>';
    echo '<strong>Êtes-vous majeur ? :</strong> ' . ($ageCheck ? 'Oui' : 'Non') . '<br>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
}
?>
