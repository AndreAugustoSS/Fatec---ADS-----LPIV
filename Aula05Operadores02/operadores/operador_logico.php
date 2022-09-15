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

 // Operadores Lógicos
 # frequentemente são utilizados com os "Operadores de Comparação"
 # Permitem 'ligar' várias comparações. Gerando uma proposição.
 # AND e OR
 # && e ||

 $a = 100;
 $b = 200;

 # Os valores de retorno em x são do tipo booleano FALSE ou TRUE.
 $x = ($a < $b) && ($a < 1000); # AND  -> True
 $x = ($a > $b) || ($a > 1000); # OR   -> False
 $x = ($a < 150) && ($b < 300); # And  -> False
 $x = ($a > 10) || ($b > 500);  # OR   -> True
 $x = ($a == 100) && ($b < $a); # AND  -> False

 // Veja como as operações são similares
 $x = ($a < $b) && ($a < 1000); # AND  -> True
 $x = (true && true);

 $x = ($a > $b) || ($a > 1000); # OR   -> False
 $x = (false || false);

 $x = ($a < 150) && ($b < 300); # And  -> False
 $x = (true && false);

 $x = ($a > 10) || ($b > 500);  # OR   -> True
 $x = (true || false);

 $x = ($a == 100) && ($b < $a); # AND  -> False
 $x = (true && false);

 

 
 ?>