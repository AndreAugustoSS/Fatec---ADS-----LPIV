<!doctype html>
<html lang="pt-BR">
  <head>
    <title>Include e Require</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  </head>
  <body class="bg-dark text-light text-left aumenta">

  <?php 
       include 'cabecalho.php';
       # require '3-Cabecalho.php';

       // Caso o programa chamado no "include" não seja encontrado o PHP gera uma mensagem de aviso "Warning" e continua.
       // Porém, para as situações em que o pragrama é exigido, deve - se utilizar o "require".
       // Neste caso, quando o programa requerido não for encontrado, o PHP gera um erro fatal e para  

?>

<?php echo " Código Principal - Teste de Inclusão de código com INCLUDE"?>

<?php 
      include_once 'rodape.php';
      # require_once '4-Rodape.php';

// Para situaçãoes em que o mesmo programa seja incluído, utilizando "include" ou "require", em pontos diferentes do programa,
// o PHP gera um erro FATAL. Então, é melhor utilizar a estensão _once.

?> 