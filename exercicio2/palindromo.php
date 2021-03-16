<?php

    function palindromo($str){

        $aoContrario = strrev($str);

        if ($aoContrario===$str) echo " é um palíndromo.";
        else echo " não é um palíndromo.";

    }

?>