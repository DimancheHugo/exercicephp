<?php

include './libraryToInclude.php';

function getUtilisateursAutorises()  {

    $utilisateurs = getAllUtilisateurs();

    $utilisateursAutorises = array();

    foreach ($utilisateurs as $utilisateur) {

        if (empty($utilisateur->blocked) && !empty($utilisateur->email) && $utilisateur->age >= 18) {

            $utilisateursAutorises[] = $utilisateur;
        }
    }

    return $utilisateursAutorises;
}

$utilisateursAutorises = getUtilisateursAutorises();
print_r($utilisateursAutorises);
?>
