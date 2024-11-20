<?php
    $tab=array(5,10,0);
    function plusGrand($tab){
        if($tab == null){
            return null;
    }else{
        $grand=0;
        for($i=0;$i<count($tab);$i++){
            if($tab[$i]>$grand){
                    $grand=$tab[$i]; 
                }
        
         }
        return $grand;
    }
        
    
}
echo plusGrand($tab);
?>