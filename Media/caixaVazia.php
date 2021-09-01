<?php

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

?>