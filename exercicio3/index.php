<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Muitos Quadrados</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- Own CSS -->
    <style>
        body{
          background: url("img/darker geometry.jpg") no-repeat center center fixed;
          -webkit-background-size: cover;
          -moz-background-size: cover;
          -o-background-size: cover;
          background-size: cover;
        }
    </style>

  </head>

  

  <body class="d-flex align-items-center">
    <div style="max-width:800px" class="container bg-light p-5 text-center">

      <?php
      
        require 'CalculaArea.php';

        // Se existe um numero informado, exibe a quantidade de quadrados. Se não, exibe um título introdutório.
        if(isset($_GET['numero']) && is_numeric($_GET['numero'])){
          echo '<h2 class="display-4">A área '.$_GET['numero'].' cobre <code><strong>';
          CalculaArea($_GET['numero']);
          echo ' quadrados.</strong></code></h2>';
        }else{
          if(isset($_GET['numero'])) $danger = true;
          echo ''
            .'<h1 class="display-4">Quantos quadrados a área <code><strong>X</strong></code> cobre?</h1>';
        }

      ?>

      <form class="row mt-3" method="get">
      <?php
        if(isset($danger)) {echo ''
          .'<div class="alert alert-danger" role="alert">'
            .'Insira apenas numeros!'
          .'</div>';}
        else {echo ''
        .'<p class="lead"> Insira um numero.</p>';}
      ?>
        <input type="number" name="numero" placeholder="Número" class="form-control text-center">
        <input class="btn btn-primary mt-3" type="submit" value="Checar área">
      </form>

    </div>
  </body>
</html>