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

 // Operadores de Diferença
 // --------------------------------------------------------------------------------

 # Exemplo 1 
 $a = (2 != 3); # True

 # Exemplo 2 - Forma alternativa da anterior
 # Porém, menos utilizada
$a = (100<>100); # False

# Exemplo 3 
$a = (50 != 50); # False

# Exemplo 4
$a = (50 != '50'); # False
## Neste caso, também é a avaliado apenas o valor e não o
## tipo de variável.

# Exemplo 5 
$a = (50 !== '50'); # True
## Neste caso são avaliados a igualdade e o tipo de variável.

// Os operadores com 3 símbolos, comparam o valor e tipo.

if ($a) {
    echo "True";
    echo "<br>";

} else {
    echo "False";
}


 ?>