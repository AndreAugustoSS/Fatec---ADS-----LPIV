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

 # Exercício 01 - André Augusto de Souza Soares
 // -----------
 # Escrever um programa documentado que faça:
 #
 # Apresenta operadores de: 

 # a) Atribuição;
 echo "<p> Atribuição </p>";

 $x = 20;
 $x = $x + 42;
 $x = $x - 6;
 $x = $x * 5;
 $x = $x / 2;
 echo '<br>';
 echo $x;
 echo '<br>';
 echo '<hr>';

#--------------------------------------------
#--------------------------------------------
#--------------------------------------------

# b) Aritmético;
echo "<p>Aritmético </p>";

$q = 20;
$m = 10;

 $resultado = $q + $m; // adição
 echo "Resultado da Adicao :  $resultado" ;
 echo "<br>";
# ===========================================

$resultado = $q - $m; // subtrção
echo "Resultado da subtracao :  $resultado" ;
echo '<hr>';
#--------------------------------------------
#--------------------------------------------
#--------------------------------------------

 # c) Modulo;
echo "<p>Modulo </p>";

$x = 10 % 3;
echo $x;
echo "<br>";
echo '<hr>';

#--------------------------------------------
#--------------------------------------------
#--------------------------------------------

# d) Divisão, Multiplicação e Produto;
echo "<p> Divisão, Produto e Potência </p>";

$z = 10; // produto
$z = $z * 2;
echo '<br>';
echo $z;
#============================================
$z = 4; // divisão
$z = $z / 2;
echo '<br>';
echo $z;
#============================================
$z = 4; // potência
$z = $z * 4;
echo '<br>';
echo $z;
echo '<hr>';
#--------------------------------------------
#--------------------------------------------
#--------------------------------------------

# e) Combinados;
echo "<p> Combinado </p>";

 $v = 20;
 $v = $v + 20;
 $v = $v - 5;
 $v = $v * 2;
 $v = $v / 2;
 echo '<br>';
 echo $v;
 echo '<br>';
 echo '<hr>';

#--------------------------------------------
#--------------------------------------------
#--------------------------------------------

# f) Pós e Pré Incremento e Decremento
 echo "<p>Pós, Pré Incremento e Decremento </p>";

 $y = 10; // decremento
 echo '<br>';
 echo $y;
 echo '<br>';
#============================================
$y++; // pós incremento
 echo '<br>';
 echo $y;
 echo '<br>'; 
#============================================
++$y; // pré incremento
echo '<br>';
echo $y;
echo '<br>'; 

 

 ?>