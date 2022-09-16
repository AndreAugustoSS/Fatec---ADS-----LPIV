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

 // "Array" (vetor) Númerico
 # Sempre que precisarmos trabalhar com 'array' númerico
 # utilizamos o índice

 $valores = [10,20,30];
 $valores[1] = 200;           # Passamos a ter um conjunto com [10,200,30]

 # Podemos ignorar o índice na inclusão de um novo elemento (no array)
 $valores[] = 400;            # Teremos então a configuração do array [10, 200, 30, 400]

 # Para apresentar o conteúdo do 'array'
 echo "<h1>Com aspas simples</h1>";
 echo 'O valor do array[1] = '. $valores[1] . 'e [2] = ' . $valores[2];
 echo "<br>";
 echo "<hr>";

 # ou
 echo "<h2>Com aspas duplas</h2>";
 echo "O valor do array[1] = $valores[1] e [2] = $valores[2]";
 echo "<br>" ;
?>