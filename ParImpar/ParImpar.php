
   

<!-- if(isset($_POST['calcular'])){
    $resultado = (double) 0;
    $num= (double) 0;
    
    if($_POST['numero'] % 2 == 0){
        $resultado = "<div> id='resultado'>O numero é: Par</div>";
    
   }else
    $resultado = "<div id='resultado'>O numero é impar</div>";
    
} -->

<?php
  $resultado = (double) 0;
  $numInicial = (double) 0;
  $numFinal = (double) 0;

if(isset($_POST['btnCalcular']))
{   
    $numeroInicio = $_POST['numInicial'];
    $numFinal = $_POST['numFinal'];
    
    echo "Numeros pares <br><br>";
            for ($i=0;$i<=10;$i++)
            {
                echo($i*2). '<br>';
            }
            echo '<br>';
            echo "Numeros Impares <br><br>";
            for ($i = 0; $i <= 10; $i++)
            {
                if($i %2 == 1){
                 echo $i. "<br>";   
               
                }
            }
        }
            ?>





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
   <div id="tabela">
     <form name="frmParImpar" 
            method="post" action="">

        <div id="inicial">
            <label>N° Inicial</label>
            <!-- <select - Botão de Seleção   -->
            <select name="sltUF">
                <!-- option - Serve para colocar as opções dentro do botão de seleção  -->
                <!-- <selected - Deixar um option padrão -->
                <option value="" name="numInicial" selected>Selecione um item</option>
              <?php
                for($i = 0; $i <=500; $i++)
                    echo "<option value='" .$i . "'>" . $i . "</option>";
                ?>
            


            </select>
        </div>

        <div id="final">
            <label>N° Final</label>
            <!-- <select - Botão de Seleção   -->
            <select name="sltUF">
                <!-- option - Serve para colocar as opções dentro do botão de seleção  -->
                <!-- <selected - Deixar um option padrão -->
                <option value=""  name="numFinal" selected>Selecione um item</option>
 
            <?php
                for($i = 100; $i <=1000; $i++)
                    echo "<option value='" .$i . "'>" . $i . "</option>";
                ?>
            

            </select>
            <div id="button"><input class="button" type="submit" name="btnCalcular" value="Calcular">
            </div>
        </div>
            <div id="pares">
                <h1>
                    Nº PARES
                    
                </h1>
                
            </div>
            <div id="impares">
                <h2>
                    Nº IMPARES
                </h2>
                
            </div>    
           <div id="QTDimpares">
              
               <p>
                QTD PARES   
                   
               </p>
               <footer id="resultado">
                    <h2>  <?=$resultado?> </h2> 
                </footer> 
           </div>
               <div id="QTDpares">
               <p>
                QTD IMPARES 
                   
               </p>
                <footer id="resultado">
                    <h2>  <?=$resultado?> </h2> 
                </footer> 
           </div>
   
    </form>
        </div>
</body>

</html>




        <!--    <option value=""  selected></option>-->
        <!--	<input type="number" name="num"/>-->
        <!--	<input type="submit"> -->