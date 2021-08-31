<!-- #gettype() - Permite verificar o tipo de dados de uma variavel ou objeto-->
<!--    #echo(gettype($media));-->
}
<?php
$media = 0;
$nota1 = null;
$nota2 = null;
$nota3 = null;
$nota4 = null;

#Valida se o botão calcular foi acionado
if (isset($_POST['btnCalcular']))
{
    $nota1 = $_POST['txtn1'];
    $nota2 = $_POST['txtn2'];
    $nota3 = $_POST['txtn3'];
    $nota4 = $_POST['txtn4'];
    
    
    #is_numeric()
    
        /*Operadores de comparação
            <
            >
            <=
            >=
            !=
            =
            ==
            === (compara o conteudo e tipo de dados)
            ==! (compara o conteudo e o tipo de dados)
        */
    
    //Tratamento para caixa vazia
    if ($nota1 == "" || $nota2 == "" || $nota3 == "" || $nota4 == "" )
    {
        echo ("<script> alert('Caixas Vazias!'); </script>");
    }
    else
    { 
        if(is_numeric($nota1) && is_numeric($nota2) && is_numeric($nota3) && is_numeric($nota4) ) 
        {
            $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
        }
        else
        {   
            echo("<script> alert('Não foi possivel calcular com dados não não númericos'); </script>");
        }
    }
} 
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
         <title>
              Calculadora
         </title>
         <meta charset="utf-8">
        <link rel="stylesheet" type="text/css"      
        href="css/style.css"> 
        <meta charset="utf-8">
    </head>
    <body>
        <div id="tabela">
            
            <form name="calculos.php" 
            method="post" action="">
            
            <div id="titulo">
             <h1>Calculo de Médias</h1>
            </div>
                
        <div>
            <!-- required - permite concertar quando não preencher nada -->
            <p>Nota 1:<input class="" type="" name="txtn1" value="<?=$nota1?>" required></p>    
            <p>Nota 2:<input class="" type="" name="txtn2" value="<?=$nota2?>" required></p>
            <p>Nota 3:<input class="" type="" name="txtn3" value="<?=$nota3?>" required></p> 
            <p>Nota 4:<input class="" type="" name="txtn4" value="<?=$nota4?>" required></p> 
            <div id="button"><input class="button" type="submit" name="btnCalcular" value="Calcular">
                        </div>
            <div id="botaoReset">  
                <a href="calculos.php">Novo Cálculo</a> 
           </div>

                
            </div>
            </form>
             
            <div id="colunaMed">
            
    
            <footer id="resultado">
                <h2>A média é: <?=$media;?> </h2> 
            </footer>    
            
            </div>
        </div>
    </body>
</html>