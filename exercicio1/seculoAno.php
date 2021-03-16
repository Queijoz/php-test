<?php

function SeculoAno($ano){

// Verifica se o ano informado é positivo ou negativo;
if($ano>0){
  
  // Caso seja positivo divide por 100 e converte o resultado em número inteiro, para transformar em século;
  $seculo = intval($ano/100);

  // Se não for um ano terminado em 0 (por exemplo, 2000), adiciona 1 ao valor atual, já que os séculos começam a ser contados do termo 1.
  if($ano%100 != 0){
    $seculo++;
  }

}else{
  // Se o ano informado é negativo, realiza a operação de transformar em século, porém, passando para positivo.
  $seculo = intval($ano/-100);

  // Se o ano informado não termina em 0, adiciona 1. Como visto previamente.
  if($ano%100 != 0){
    $seculo++;
  }
}

return $seculo;

}

?>