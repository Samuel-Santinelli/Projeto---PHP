<?php
require_once('funcoes.php');

 

 

 

//declarando uma variavel
 $cont = (double) 0;
$tabuada = (double) 0;
$i = (double) 0;
$resultado =(double) 0;

 

 

 

 

 

const ERRO_CAIXA_VAZIA =  "<span class='msgErro'><h1>Não é possível calcular sem preencher todos os dados!</h1></span>";
 const ERRO_DADOS_NAO_NUMERICOS = "<span class='msgErro'><h1>Não é possível realizar calculos com valores não númericos</h1> </span>";
const NAO_TEM_TABUADA_DO_ZERO = "<h1>Não é possível fazer a tabuada do zero</h1>";

 

 

 

if(isset($_POST['btnCalcular'])){ // validação do botão calcular
        $tabuada = $_POST['tabuada'];
        $cont = $_POST['cont'];
    
     if($_POST['tabuada']=="" || $_POST['cont']==""){
         echo (ERRO_CAIXA_VAZIA); 
     }
       
    else{
      
            if(is_numeric($cont) && is_numeric($tabuada)){
        
               if($cont == "0" || $tabuada =="0"){
                   echo(NAO_TEM_TABUADA_DO_ZERO);
               }
            }
    }
}
else{
    echo (ERRO_DADOS_NAO_NUMERICOS);
}
    


   
?>



<!DOCTYPE html>










<html lang="pt-BR">

<head>
    <title>
        <h1>Gerador de Tabuada</h1>
    </title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,100;1,300&display=swap" rel="stylesheet">
</head>

<body>
    <div id="ConteudoMenu">

        <div class="hamburguer">
            <span id="ham"></span>
            <span id="ham"></span>
            <span id="ham"></span>

        </div>
    </div>

    <div id="frmTabuada">

        <h1>Tabuada </h1>

        <form action="" method="post" name="frmTab">
            <div id="tabuada">
                <label>
                    <p>Tabuada:</p>
                </label>
                <input type="text" name="tabuada" value="<?=$tabuada?>" maxlength="2">
            </div>
            <div id="contador">
                <label>
                    <p>Contador:</p>
                </label>
                <input type="text" name="cont" value="<?=$cont?>" maxlength="2">
            </div>


            <div id="calcular">
                <input type="submit" name="btnCalcular" id="calculo" value="Calcular">
            </div>
            <footer>

                <h2>
                    <?php
            
            $resultado =calculo($tabuada,$cont);
            ?>
                </h2>

            </footer>

        </form>

    </div>

</body>










</html>


