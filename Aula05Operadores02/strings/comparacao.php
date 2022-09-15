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
 # Comparação de "Strings"
 # Funções nativas do PHP para manipulação de "strings"

 # Exemplo 1 - Comparação de "String"
 $a = 'Jonatas';
 $b = 'DIAS';

 $c = ($a == $b);  # false (comparador lógico ==)
 $d = ($a != $b); # true   (comparador lógico !)
#----------------------------------------------------
 # Exemplo 2 - Funções nativas
 $texto = 'Frase com x caracteres = 26';
 # Retorna o número de caracteres
$num_caractere = strlen($texto);
echo $num_caractere;
echo "<br>";

# Retorna uma parte do texto a partir de uma
# determinada posição
$parte_texto = substr($texto, 0, 4);
echo $parte_texto;
echo "<br>";
echo "<hr>";
# Converter para letras maiusculas
$texto_maiuscula = strtoupper($texto);
echo $texto_maiuscula;
echo "<br>";

#Substituir uma letra por outra
$subsLetra = str_replace('a', 'x', $texto);
echo $subsLetra;
echo "<br>";

#Verifica a posição/index de um caracter
$txt = "Hellow Word!";
$index = strpos($txt, 'w');
echo $index;
?>