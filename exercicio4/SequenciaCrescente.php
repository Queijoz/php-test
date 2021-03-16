<?php
    // Array usado para testar todas as sequências propostas pelo exercício.
    $arrayDeArrays = [[1, 3, 2, 1], [1, 2, 1, 2], [1, 2, 5, 5, 5], [1, 1, 1, 2, 3], [1, 4, 10, 4, 2], [1, 1, 2, 3, 4, 4], [3, 6, 5, 8, 10, 20, 15], [1, 2, 3, 4, 5, 3, 5, 6], [40, 50, 60, 10, 20, 30], [10, 1, 2, 3, 4, 5, 6, 1], [1, 1], [1, 3, 2], [0, -2, 5, 6], [1, 2, 5, 3, 5], [3, 5, 67, 98, 3], [1, 2, 3, 4, 3, 6], [10, 1, 2, 3, 4, 5], [1, 2, 3, 4, 99, 5, 6], [123, -17, -5, 1, 2, 3, 12, 43, 45]];

    // Testa todas as sequências.
    for($a = 0; $a<count($arrayDeArrays); $a++){
        $array = $arrayDeArrays[$a];
        SequenciaCrescente($array);
    }

    function SequenciaCrescente($array){

        // Remove os elementos do array um por um.
        for ( $i=0; $i<count($array); $i++ ) {

            // Faz uma cópia do array para remover um elemento.
            $arrayMenor = $array;

            // Remove um elemento do array, deixando uma posição não utilizada.
            unset($arrayMenor[$i]);

            // Move os valores do array para evitar posições não utilizadas.
            for ( $j=0; $j<count($arrayMenor); $j++ ) {

                if ( !isset($arrayMenor[$j]) && isset($arrayMenor[$j+1]) ){

                    $arrayMenor[$j] = $arrayMenor[$j+1];
                    unset($arrayMenor[$j+1]);

                }

            }
            
            // Verifica quantos termos crescentes o novo array possui.
            $numeroDeTermosCrescentes = 0;
            for( $j=1; $j<count($arrayMenor); $j++ ){

                if ( $arrayMenor[$j-1] < $arrayMenor[$j] ){
                    $numeroDeTermosCrescentes++;
                }

            }

            // Se o número de termos crescentes for igual ao esperado de uma sequência crescente do mesmo tamanho, é crescente.
            if ( $numeroDeTermosCrescentes == count($arrayMenor)-1 ) {
                echo '<br>Pode-se formar uma sequência crescente removendo um só termo.<br>'.print_r($array).'<br><br><br>';
                $crescente = true; break;
            }
            
        } 

        if ( !isset($crescente) ) echo '<br>Não se pode formar uma sequência crescente removendo um termo.<br>'.print_r($array).'<br><br><br>'; 
    }

?>