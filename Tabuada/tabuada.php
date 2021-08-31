<?php
$tabuada = (double) 0;
$resultado = 0;

 


 

if(isset($_POST['btnCalcular'])){
    
$tabuada = $_POST['tabuada'];
$valor = $_POST['valor'];
    if ($_POST['tabuada'] == "" || $_POST['valor'] == ""){
        echo ("<h1>Preencha as caixas de texto!!</h1>");
    }else{
        
    if(is_numeric($valor) && is_numeric($tabuada)){
        if ($valor == 0 || $tabuada == 0 ){
            echo("<h1>Não existe tabuada do '0' zero!!!</h1>");
        }else{
            for($i=1; $i<=$valor; $i++){
     $resultado = $tabuada * $i;
        echo ($tabuada . "X" . $i ."=" . $resultado . "<br>");
        $i+1;

      
        }
        
          
    
        
        
}

 

}else{
    echo("valor não númerico");
}

        
    }

 

}

 


   
?>
<!DOCTYPE html>



<html>

<head>
    <title> Projeto - 25/08/2021 </title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,100;1,300&display=swap" rel="stylesheet">
    <meta charset="utf-8">

</head>

<body>
   <div id="ConteudoMenu">

                <div class="hamburguer">
                    <span id="ham"></span>
                    <span id="ham"></span>
                    <span id="ham"></span>

                </div>
            </div>
    
        <form action="" method="post" name="frmTab">
      
      <header>
        <h1>
            Gerador Tabuada
        </h1>
    </header>


            <label>
                <p>Tabuada</p>
            </label>
            <input type="text" name="tabuada" value="" maxlength="2">
            <label>
                <p>Contador</p>
            </label>
            <input type="text" name="valor" value="" maxlength="2">
            
            
            <div id="caixaBotao">
            <input id="botao" type="submit" name="btnCalcular" value="calcular">
            </div>
            <div id="caixaResultado">
             <footer>
                    <h1>  
                          <?=$resultado?>
                      </h1> 
                </footer> 
          
             </div> 
        </form>
</body>



</html>

<!--
//function tabuada($tabuada,$valor){
//  $i = 0;
//    
//    while($i <= $valor){
//        $resultado = $tabuada * $i;
//        echo ($tabuada."X". $i."=".$resultado."<br>");
//        $i++;
//    } 
 return $resultado;  
}
-->