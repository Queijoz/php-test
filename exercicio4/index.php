<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sequências</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- Own CSS -->
    <style>
        body{
          background-color: cyan;
        }
    </style>

  </head>

  

  <body class="d-flex align-items-center">
    <div style="max-width:800px" class="container bg-light p-5 text-center">

      <h1 class="display-6 "> Nesta página são printados todos os arrays propostos no exercício. </h1>
      <p class="lead mb-5">Os arrays foram ordenados por tamanho e separados em 2 grupos, sendo eles os que esperam resposta falsa e os que esperam resposta verdadeira.</p>
      
      <?php

        require 'SequenciaCrescente.php'

      ?>

    </div>
  </body>
</html>