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

 // Um operador de comparação foi adicionado no PHP
 # chamado de "spaceship operator".
 # É o "Tie Fighter" do "Star Wars"
 #
 # <=>
 # Esse operador retorna três valores possíveis
 # [0,1,-1]

 $x = 1 <=> 1; # Retorna 0
 # Indica que os valores da esquerda e da direita são iguais
 # Equivale a (1 == 1)

 $x = 3 <=> 2; # Retorna 1
 # Indica que o valor da esquerda é maior que o da direita
 # Equivale a (3 > 2)

 $x = 1 <=> 2; # Retorna -1
 # Indica que o valor da esquerda é menor do que o da direita
 # Equivale a (1< 2)
 
 ?>