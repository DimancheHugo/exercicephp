<?php
    $arg="btsciel77@";
    function verificationPassword($arg){
            if(strlen($arg)>=8){
            return true;
        }else{
            return false;
        }
    }
    echo verificationPassword($arg);
?>