<?php

    function CalculaArea($num){

        /*
        A área que os quadrados cobrem cresce em um razão não constante.
        Por exemplo, da área número 1 para a área número 2, a razão de crescimento do número de quadrados é 4. Já da área 2 para a área 3, a razão de crescimento do número de quadrados é 8.
        Porém, percebe-se que a razão cresce de maneira constante em 4 unidades.

        Logo, para descobrir-se o número de quadrados que uma área cobre, primeiramente, deve-se descobrir quantas vezes foi-se adicionado a razão até então. Para descobrir isso, faz-se o somatório do número das áreas anteriores, até a área 0.

        exemplo: área de número 3 = 2 + 1 // 3
                 área de número 5 = 4 + 3 + 2 + 1 // 10

        Após isso, basta multiplicar o resultado por 4 e adicionar o quadrado prévio, isto é, o quadrado da área inicial.
        exemplo: área de número 3 = 3 // 3*4+1 // 13
                 área de número 5 = 10 // 10*4+1 // 41


        Em forma de código... */

        $somatorioDoNumeroDasAreas = 0;
        
        for($i=$num-1; $i>0; $i--){

            $somatorioDoNumeroDasAreas += $i;

        }

        $quadrados = $somatorioDoNumeroDasAreas*4+1;

        echo $quadrados;

    }

?>