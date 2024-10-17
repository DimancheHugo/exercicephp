<?php
    $arg1=10;
    $arg2=5;
    $arg3=20;
    function plusPetit($arg1,$arg2,$arg3){
        if($arg1<$arg2 && $arg1<$arg3){
            return $arg1;
        }if($arg2<$arg1 && $arg2<$arg3){
            return $arg2;
        }else
            return $arg3;
    }
    echo plusPetit($arg1,$arg2,$arg3);
?>