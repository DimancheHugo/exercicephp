<?php
    $arg1=10;
    $arg2=5;
    function plusPetit($arg1,$arg2){
        if($arg1<$arg2){
            return $arg1;
        }else{
            return $arg2;
        }
    }
    echo plusPetit($arg1,$arg2);
?>