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
                        
        echo("O numero selecionado é menor!! Selecione outro numero");
    
    }
}


?>
