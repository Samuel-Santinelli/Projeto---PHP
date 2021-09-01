<?php



$cont = (int) 0;
$exibirImpar = (int) 0;
$exibirPar = (int) 0;


$numeroInicial = (int) 0;
$numeroFinal = (int) 0;


 

if(isset ($_POST['btnCalc'])){
    
    if( $_POST["stlPar"] = "" || $_POST["stlIm"] = "" ){
        echo("caixa_vazia");
    }
    else{
        $numeroInicial = (int)$_POST['sltPar'];
        $numeroFinal = (int)$_POST['sltIm'];
    }
    
    if($numeroInicial >= $numeroFinal){ 
                        
        echo("numero_menor");
    
    }
}






 


?>


<html>
    
    
    
    
    <head>
        <meta charset="utf-8">
       <link rel="stylesheet"
        type="text/css"
        href="css/style.css">
    </head>
    
    
    
    <body> 
        
        <h1> ImparPar </h1>
        
        <form name="frmParimp" method="post" action="">
        <label> N-Inicial</label>
            
        <select name="sltPar">
            
  <?php  
        for($cont=0;$cont<=500;$cont++){
            
        echo "<option value='$cont'>$cont  </option>"; 
    }
  
  ?>
            
  </select>
            
            
        
      <label> N-Final</label>
            
        <select name="sltIm">
            
  <?php  
        for($cont=100;$cont<=1000;$cont++){
            
        echo "<option value='$cont'>$cont  </option>"; 
    }
  
  ?>
            
  </select> 
        <input type="submit" name="btnCalc" value="Calcular">
   
            
            
    
        
    <table id="resultado">
        
        <tr>
            <td id="tabela">
                <?php
                    for($cont=$numeroInicial;$cont<=$numeroFinal;$cont++){
                        if ( ($cont % 2) == 0){
                            echo ($cont."<br>");
                    }
                } 
                ?>
            </td>
            
            <td id="tabela1">
                 <?php
                
                   for($cont=$numeroInicial;$cont<=$numeroFinal;$cont++){ 
                    
                    if( ($cont % 2) != 0){
                           echo ($cont."<br>");
                        
                        
                       }
                   
                   }
                     
                  ?>
            </td>
        
        
        </tr>
        
        <tr>
            
            <td  class="quantidade">
                
                <?php
                
                for($cont=$numeroInicial;$cont<=$numeroFinal;$cont++){
                    if(($cont %2 ) != 0 ){
                        $exibirPar = $exibirPar +1;
                       }
                    
                }
                
                 echo ($exibirPar);
                
                
                
                
            
            ?>
            
            
            </td>
            
            
            <td class="quantidade" >
                
                <?php
                
                for($cont=$numeroInicial;$cont<=$numeroFinal;$cont++){
                    if(($cont %2 ) != 0  ){
                   $exibirImpar = $exibirImpar +1; 
                    }
                     
                }
                echo ($exibirImpar);
                  
            
            ?>
            
            
            </td>
            
            
            
        
        </tr>
        
        
        
    </table>
    
                
        
      
    
      </form>
    </body>



</html>