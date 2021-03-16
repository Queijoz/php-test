<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Palíndromo</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- Own CSS -->
    <style>
        body{
          background: url("img/darker languages.jpg") no-repeat center center fixed;
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
      
        require 'palindromo.php';

        // Se existe uma palavra informada, exibe o teste de palíndromo. Se não, exibe um título introdutório.
        if(isset($_GET['palavra']) && is_string($_GET['palavra'])){
          
          if($_GET['palavra'] == ""){
            echo '<h2 class="display-4"><code><strong> INFORME UMA PALAVRA :) </strong></code></h2>';
          }else{

            echo '<h2 class="display-4">A palavra '.$_GET['palavra'].'<code><strong>';
            palindromo($_GET['palavra']);
            echo '</strong></code></h2>';
          }
        }else{
          if(isset($_GET['palavra'])) $danger = true;
          echo ''
            .'<h1 class="display-4">A palavra <code><strong>X</strong></code> é um palíndromo?</h1>';
        }

      ?>

      <form class="row mt-3" method="get">
      <?php
        if(isset($danger)) {echo ''
          .'<div class="alert alert-danger" role="alert">'
            .'Insira apenas palavras!'
          .'</div>';}
        else {echo ''
        .'<p class="lead"> Insira uma palavra.</p>';}
      ?>
        <input type="text" name="palavra" placeholder="Palavra" class="form-control text-center">
        <input class="btn btn-primary mt-3" type="submit" value="Checar Palavra">
      </form>

    </div>
  </body>
</html>