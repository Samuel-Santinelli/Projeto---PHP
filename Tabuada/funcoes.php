<?php

 


function calculo($t,$c){
    
                 $tab = (double)0; 
                 $cont = (double) 0;
                $total = (double) 0;
                    
                  $tab = $t;
                     $cont = $c;
                        
                        
          for($i=1; $i<=$cont; $i++){
           $total = $tab * $i;
             echo ($tab."X". $i."=".$total."<br>");
              $i+1;
                   
              }
                   return $total;
               }

 

 

 

?>