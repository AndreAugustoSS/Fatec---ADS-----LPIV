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

 // Operadores - O que é / Operador de atribuição
 // =============
 # São símbolos que permitem executar operações matemáticas 
 # ou operações lógicas / comparativas 
 
 // Parte 1
 # Operador de atribuição utilizando o sinal de "="
 $var = 100;
 echo "Parte 1 - Operador de atribuicao. Valor atribuido = $var";
 echo"<br>";

 // Parte 2 
 # Alguns operadores de atribuição
 echo "<br>";
 echo "Parte 2 - # Operadores Matematicos <br> ";
 $a = 10;
 $b = 20;
 $x = $y = $z = 100;
echo "Soma de $a + $b = $x <br>";

 # Alguns operadores matemáticos:

 # Adição
 $resultado = $a + $b;
 echo "Resultado da Adicao :  $resultado" ;
 echo "<br>";

# Subtração
$x = $b - $a;
echo "<br>";

# Multiplicação
$x = $a * $b;
echo "<br>";

# Divisão
$x = $b / $a;
echo "Div: " .$x;
echo "<br>";

# Módulo (Mostra o resto da divisão)
$x = 4 % 2;
echo $x;
echo "<br>";

$x = 10 % 3; # Resultado 3 sobra 1 => Apresenta 1  
echo $x;
echo "Resultado sera: " .$x;
echo "<br>";

 ?>