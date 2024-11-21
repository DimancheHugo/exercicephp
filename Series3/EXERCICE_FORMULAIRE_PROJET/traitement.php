<?php
// Traitement des données si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données envoyées via POST
    $nom = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '';
    $prenom = isset($_POST['prénom']) ? htmlspecialchars($_POST['prénom']) : '';
    $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
    $password = isset($_POST['password']) ? htmlspecialchars($_POST['password']) : '';
    $message = isset($_POST['message']) ? htmlspecialchars($_POST['message']) : '';

    // Masquer le mot de passe en remplaçant chaque caractère par un *
    $password_masque = str_repeat('*', strlen($password));

    
    // Chemin du fichier JSON
    $file = 'data.json';
    // Ajouter les nouvelles données de l'utilisateur
    $new_user = array(
        'name' => $nom,
        'prenom' => $prenom,
        'Email' => $email,
        'password' => $password_masque,
        'message' => $message,
        'age' => 'Majeur'
    );

    // Ajouter l'utilisateur au tableau
    $data[] = $new_user;
    

    // Réécrire le tableau dans le fichier JSON
    file_put_contents($file, json_encode($data, JSON_PRETTY_PRINT));


    echo "Données ajoutées avec succès.";

    // Commence à afficher les résultats
    echo '
    <!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Résultats du Formulaire</title>
        <!-- Lien vers Bootstrap CSS -->
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/styles.css">
    </head>
    <body>
        <div class="container mt-5">
            <h2 class="text-center mb-4">Données soumises :</h2>
            <div class="card">
                <div class="card-body">
                    <p><strong>Nom :</strong> ' . $nom . '</p>
                    <p><strong>Prénom :</strong> ' . $prenom . '</p>
                    <p><strong>Email :</strong> ' . $email . '</p>
                    <p><strong>Mot de passe :</strong> ' . $password_masque . '</p>
                    <p><strong>Message :</strong> ' . nl2br($message) . '</p>
                    <p><strong>Êtes-vous majeur(e) ? :</strong> ' . 'oui'. '</p>
                </div>
            </div>
        </div>

        <!-- Liens vers les scripts JavaScript -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    </body>
    </html>';
}
?>
