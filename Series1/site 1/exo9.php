<?php
    $age=5;
    function estIlMajeure($age){
        if($age>=18){
            return true;
        }else{
            return false;
        }
    }
    echo estIlMajeure($age);
?>