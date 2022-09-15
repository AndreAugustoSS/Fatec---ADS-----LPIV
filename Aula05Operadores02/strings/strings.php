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

 // Strings
 # Uma "string" é um conjunto concatenado de caracteres
 # armazenados em uma variável.
 # Podemos definir uma "string" como sendo um conjunto de letras,
 # espaços, símbolos e designados como texto.
 #
 # Podem ser delimitadas por:
 # aspas simples ' (single quote) ou
 # aspas duplas  " (double quote)
 #
 # Podemos usar uma ou outra, basta manter um padrão
 # no código
 
 # Exemplo 1
 $a = 'Esta é uma string';
 $b = "Esta é uma outra string";
 
 echo $a;
 echo "<br>";
 echo $b;
 echo "<br>";

 # Exemplo 2
 $a = 'Esta é uma "string" ';
 $b = "Esta é uma outra 'string' ";
 echo $a;
 echo "<br>";
 echo $b;
 echo "<br>";

 ?>