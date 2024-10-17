<?php
function remplacerLesLettres($str) {
    $lettres = array('e', 'i', 'o');
    $remplacements = array('3', '1', '0');
    $nouvelleStr = str_replace($lettres, $remplacements, $str);
    return $nouvelleStr;
}
echo remplacerLesLettres("Bonjour les amis"); 
echo "\n";
echo remplacerLesLettres("Les cours de programmation Web sont trops cools"); 
?>
