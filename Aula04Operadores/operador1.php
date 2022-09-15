<!doctype html>
<html lang="pt-BR">
  <head>
    <title>Aula03</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  </head>
  <body class="bg-dark text-light text-left aumenta">

  <?php 

 // Operadores de Atribuição Combinados
 // Permitem que alteremos o valor original de uma varável,
 // a partir do valor original
 // =================

 $x = 10;
 $x = $x + 10;
 $x = $x - 7;
 $x = $x * 2;
 $x = $x / 2;
 echo '<br>';
 echo $x;
 echo '<br>';

 // Reinicar  com "Formato Simplificado"

 $x = 10;
 $x += 10;
 $x -= 7;
 $x *= 2;
 $x /= 2;
 echo '<br>';
 echo $x;
 echo '<br>';
 
 ?>