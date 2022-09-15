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

 // Variáveis - Continuação 2 
 // ==========================

 # Uma variável
 $x = "Oi";

 # Uma variável da variável
 $$x = "Mundo";

 echo "$x <br>";
 echo "${$x} <br>";
 
 echo "Variavel $x e variavel variavel ${$x}";
 

 ?>