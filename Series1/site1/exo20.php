<?php
$titre = "Capitale";
$ville = array("Paris", "Berlin", "Moscou");

function listHTML($titre, $ville) {
    // Vérification si le titre est vide ou null
    if (empty($titre) && empty($ville)) {
        return null;
    }
    
    // Commence à construire la chaîne de caractères HTML
    $html = "<h3>$titre</h3><ul>";
    
    // Boucle à travers chaque élément de la liste $ville
    foreach ($ville as $v) {
        $html .= "<li>$v</li>";
    }
    
    // Ferme la balise <ul>
    $html .= "</ul>";
    
    // Retourne le résultat HTML
    return $html;
}

// Appel de la fonction pour tester
echo listHTML($titre, $ville);
?>
