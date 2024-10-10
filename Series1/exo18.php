<?php
    $arg = "Btsciel77@";
    $len = false;
    $upp = false;
    $lowe = false;
    $digit = false;

    function verificationPassword($arg) {
        if(strlen($arg) >= 8){
            $len = true;
        }
        for ($i = 0; $i < strlen($arg); $i++) {
            $char = $arg[$i];
            if(ctype_upper($char)){
                $upp = true;
            }
            if(ctype_lower($char)){
                $lowe = true;
            }
            if(ctype_digit($char)){
                $digit = true;
            }
        }
        if($len && $upp && $lowe && $digit){
            return true;
        }

        return false;
    }
echo verificationPassword($arg);
?>
