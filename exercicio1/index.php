<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Século</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- Own CSS -->
    <style>
        body{
          background: url("img/darker old greek.jpg") no-repeat center center fixed;
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
        require './seculoAno.php';

        // Se existe um ano informado, exibe o século. Se não, exibe um título introdutório.
        if(isset($_GET['ano']) && is_numeric($_GET['ano'])){
          
          $seculo = SeculoAno($_GET['ano']);

          echo ''
          .'<h2 class="display-4">O ano '.$_GET['ano'].' pertence ao século <code><strong>';
          if($_GET['ano']>0){
            echo $seculo.' D.C.</strong></code></h2>';
          }else{
            echo $seculo.' A.C.</strong></code></h2>';
          }

        }else{
          if(isset($_GET['ano'])) $danger = true;
          echo ''
            .'<h1 class="display-4">A qual século o ano <code><strong>X</strong></code> pertence?</h1>';
        }

      ?>

      <form class="row mt-3" method="get">
      <?php
        if(isset($danger)) {echo ''
          .'<div class="alert alert-danger" role="alert">'
            .'Insira apenas números!'
          .'</div>';}
        else {echo ''
        .'<p class="lead"> Insira um número inteiro.</p>';}
      ?>
        <input type="number" name="ano" placeholder="Ano" class="form-control text-center">
        <input class="btn btn-primary mt-3" type="submit" value="Checar Século">
      </form>
    </div>
  </body>
</html>