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

 // Formatação de Variáveis Numéricas
 # Utilizando numberformat()

 echo "Formatacao de Variaveis numericas <br>";
 echo "<br>";

 # Definindo Variáveis
 $Val = 75.5; #Float

 // Apresentando SEM formatação
 echo " 1 - Apresentando a variavel SEM formatacao <br>";
 echo "Valor da variavel: $Val";
 
 # Apresentando o tipo da variavel
 echo "<br>";
 echo "Apresentando o tipo da variavel: ";
 echo var_dump($Val);

 // Apresentando COM formatação
 echo "<br>";
 echo "<br>";
 echo " 2 - Apresentando a variavel COM formatacao <br>";
 $ValFormat = number_format($Val, 2, ',' , '.');
 echo "Valor da variavel Formatada: $ValFormat <br>";
 

 # Apresentando o tipo da variavel
 echo "<br>";
 echo "Apresentando o tipo da variavel: ";
 echo var_dump($ValFormat);


 ?>