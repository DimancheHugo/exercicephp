<?php
    $tab=array(5,10,15);
    function plusPetit($tab){
        if($tab == null){
            return null;
    }else{
        $petit=$tab[0];
        for($i=0;$i<count($tab);$i++){
            if($tab[$i]<=$petit){
                    $petit=$tab[$i]; 
                }
        
         }
        return $petit;
    }
        
    
}
echo plusPetit($tab);
?>