<?php

$heure = 16;

if($heure >= 5 && $heure <= 12) {
    echo 'Bonjour nous somme le matin!';
}  elseif($heure > 12 && $heure <= 16) {
    echo 'Bon après-midi !';
} elseif($heure > 16 && $heure <= 21) {
    echo 'Bonne soirée !';
} else {
    echo 'Bonne nuit !';
}

?>