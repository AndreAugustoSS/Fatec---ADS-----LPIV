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
 # Concatenação de "Strings"
 # É um processo de junção de "Strings" por meio de
 # código em tempo de execução.
 #
 # Temos dois operadores de concatenação:
 # .    Concatena "strings" na variável
 # .=   Concatena com o valor já existente na variável 
 
 # Exemplo com "."
 $a = 'Patricia ' . ' '. 'Ribeiro ' . 'de ' . 'Alencar ';
 $b = 'Alex ' . 'Shisip ' . 'Park ';
 echo $a;
 echo "<br>";
 echo $b;

 $x = 'Jonatas ';
 $y = 'Dias';
 echo "<br>";
 echo $x . $y;
 echo "<br>";

# Exemplo com ".="
$x .= "C. ";
echo "<br>";
echo $x . $y;
echo "<br>";

 ?>