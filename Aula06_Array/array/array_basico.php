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

 // "Array" (vetor) - O que é
 # É uma matriz (unidimensional) que corresponde a uma coleção de valores.
 # Funciona como uma variável que contém muitos valores.
 # A localização de um desses valores é designada por um índice do "array"

 # Exemplo
 $valores1 = array(1,2,3,420,30);                  # Array do tipo númerico
 $nomes = array('Pedro', 'Paulo', 'Ana');          # Array do tipo texto

 # A partir do PHP 5.x passou-se a representar o array
 # de uma outra forma mais simples
 # Arrays de índice numérico
 $valores2 = [1,2,3,40,50];
 $nomes2 = ['Pedro', 'Ana', 'Paulo'];

 # Os 'arrays' possuem como base o índice 0 (zero)
 echo $valores2[0];
 echo "<br>";
 echo $valores2[1];
 echo "<br>";


 # Exemplo nomeado com números 
 # para isto vamos utilizar um "Operador de  atribuição" (=>) 
 $dados = [
    10 => 100,
    20 => 200,
    30 => 300
 ];
 echo $dados [10];
 echo "<br>";

?>