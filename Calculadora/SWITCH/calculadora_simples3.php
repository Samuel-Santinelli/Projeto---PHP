<!--AULA - 07-->
<?php
/*
include
include_once

require
require_once
*/

# constante - é um elemento que não muda de valor
# Declarando uma variavel e definind9o do seu tipo de dados
$resultado = (double) 0;
$valor1 = (double) 0;
$valor2 = (double) 0;
$operacao = (string) null;

$chkSomar = (string) null;
$chkSubtrair = (string) null;
$chkMultiplicar = (string) null;
$chkDividir = (string) null;



//import do arquivo de variaveis e constantes
require_once('functions/variaveis.php');


/*
        string - Tipo de dados Texto
        int ou intenger - Tipo de dados númericos inteiro
        double - Tipo de dados númerico com casas decimais(capacidade maior de armazenamento) 
        float - Tipo de dados númerico com casas decimais(capacidade menor de armazenamento)
        boolean ou bool - Tipo de dados (true/false)
        array - Tipo de dados para matrizes e vetores
        object - Tipo de dados para referenciar um objeto
        isset - verifica se existe
    */

//Validação para verificar se o botão calcular foi acionado
//Import do arquivos de funções para realizar calculos
require_once('functions/calculos.php');
if(isset($_POST['btncalc']))
{
    //empty() permite vrificar se um elemento é vazio    

    #se tiver só uma resposta na linha não precisa de chaves

    //Validação para caixa vazia
    if(empty($_POST['txtn1']) || empty($_POST['txtn2']))
        echo (ERRO_CAIXA_VAZIA);
    else{

        #Resgatando valores do formulário no HTML
        $valor1 = $_POST['txtn1'];
        $valor2 = $_POST['txtn2'];

        #Resgata o valor do radio e converte a escrita para MAIUSCULO
        #strtoupper() maiusculo
        #strtolower() minusculo

        //Validação para a escolha de uma operação de calculo    
        if (isset($_POST['rdocalc']))
        {
            $operacao = strtoupper($_POST['rdocalc']);

            //Validação para identificar se os dados são numeros 
            if (is_numeric($valor1) && is_numeric($valor2))
            {   
                //Chamada da função calcular, enviando os argumentos 
                //de valores e operação
                $resultado = calcular($valor1, $valor2, $operacao);

            }//Validação para verificar se os dados são numeros
            else
                echo(ERRO_DADOS_NAO_NUMERICOS);  

            // is numeric
        }else    
            echo(ERRO_CAIXA_VAZIA);
    }//Validação para caixa vazia

}//Validação para verificar se o botão calcular foi acionado


?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <title>
        Calculadora - Simples
    </title>
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



    <form name="calculos.php" method="post" action="">

        <header>
            <h1>
                Calculadora Simples
            </h1>
        </header>

        <div>

            <p>Valor 1:<input type="text" name="txtn1" value="<?=$valor1?>"></p>
            <p>Valor 2:<input type="text" name="txtn2" value="<?=$valor2?>"></p>

        </div>

        <div><input class="" type="radio" name="rdocalc" value="somar" <?php  
    if($operacao == 'SOMAR')
        echo('checked');
                            ?>><span>Somar</span></div>
        <div><input class="" type="radio" name="rdocalc" value="subtrair" <?php  
                            if($operacao == 'SUBTRAIR')
                                echo('checked');
                            ?>><span>Subtrair</span></div>

        <div><input class="" type="radio" name="rdocalc" value="multiplicar" <?php  
                            if($operacao == 'MULTIPLICAR')
                                echo('checked');
                            ?>><span>Multiplicar</span></div>

        <div><input class="" type="radio" name="rdocalc" value="dividir" <?php  
                            if($operacao == 'DIVIDIR')
                                echo('checked');
                            ?>><span>Dividir</span></div>

        <div id="button"><input class="button" type="submit" name="btncalc" value="Calcular"></div>

        <!-- <footer id="resultado">-->
        <footer id="resultado">
            <h2> <?=$resultado?> </h2>
        </footer>
    </form>

</body>

</html>
