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

 // "Array" (vetor) Multidimensional
 # São "arrays" numéricos ou associativos, cujos valores
 # são outros arrays.

 # É uma estrutura multidimensional, pois possui
 # elementos de "arrays" dentro de um outro "array".

 # Array multidimensional numéricos
 $dados = [
    [10,20,30,40],              # Elemento 1 índice 0 do "array" $dados  
    [100,200,300,400],          # Elemento 2 índice 1 do "array" $dados
    [1000,                      # Elemento 3 índice 2 do "array" $dados. Sub item 1 - Índice 0
     2000,                      # Elemento 3 índice 2 do "array" $dados. Sub item 2 - Índice 1
     3000,                      # Elemento 3 índice 2 do "array" $dados. Sub item 3 - Índice 2
     4000]                      # Elemento 3 índice 2 do "array" $dados. Sub item 4 - Índice 3
 ];
 # Como apresentamos estes elementos destes "arrays"
 # Exemplo 1 - multidimensionais de índice numérico:
 echo "<h1>Exemplo 1 - multidimensionais de índice numérico</h1>";
 echo $dados[2][2];             # Vai apresentar o 3000
 echo "<br>";

 echo $dados[0][1];             # Vai apresentar o 20
 echo "<br>";
 echo "<hr>";
 echo "<hr>";

 # Exemplo 2 - Multidimensionais Associativo (Índice "string" nominal):
 echo "<h2>Exemplo 2 - Multidimensionais Associativo</h2>";
 $dados2 = [
    'cliente' => ['Nome', 'Endereço', 'Fone'],
    'estados' => ['Alagoas', 'Para', 'DF - Brasilia'],
    'frutas'  => ['Maça', 'Banana', 'Laranja']
 ];

 # Como aprsentamos os elementos deste "array"
 # multidimensional de índice nominal
 echo $dados2['cliente'][0]; #Vai apresentar os nomes
 echo "<br>";
 echo $dados2['frutas'][0]; # Vai apresentar as frutas
 echo "<br>";


?>