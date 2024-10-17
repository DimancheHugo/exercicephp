<?php
    $tab=array(5,10,0);
    function premierElementTableau($tab){
        if($tab[0] ==null){
            return null;
    }else{
        return $tab[0];
    }
    }
    echo premierElementTableau($tab);
?>