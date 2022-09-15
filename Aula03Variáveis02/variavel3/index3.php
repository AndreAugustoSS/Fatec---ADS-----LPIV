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

 // Variáveis - Continuação 3
 // ==========================
 
 # Trabalhando com Constantes
 # São utilizadas com variaveis cujo conteudo devem mudar
 # como padrão são definidasn com letras maiusculas

 echo "Trabalhando com Constantes <p>";

 // Exemplos
 # Definindo uma variavel constante de nome TAXA com 50%
 define("TAXA", 0.5);

 # Definindo outra variavel constante de nome JUROS com 1%
 define("JUROS", 0.01);

 // Utilizar estas variaveis
 echo "Valor da taxa: " . TAXA . "% <br>";
 echo "Valor do juros igual a: " . JUROS . "% <br>";

 ?>