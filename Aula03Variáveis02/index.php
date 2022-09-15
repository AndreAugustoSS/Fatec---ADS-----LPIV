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
 // Variáveis - Continuação
 // ======================
 
 $nome = "Joao"; # Variável do tipo String
 $aula = 'PHP'; # Variável do tipo String
 $idade = 19; # Variável do tipo Int
 $peso = 70.5 ;# Variável do tipo Float
 $altura = 17.1; # Variável do tipo Float
 
 //  Versão 1 Utilizando as Variáveis
 echo "Utilizando as Variaveis";
 echo "<br>";
 echo "Meu nome: $nome <br>";
 echo 'Minha idade $idade <br>';
 // Concatenação de string com '.' o ponto é utilizado para realizar a concatenação
 echo 'Minha idade: '.$idade;
 echo '<br>';


 // Versão 2 Utilizando as Variáveis
 echo"<p>Me chamo $nome. tenho $idade anos de idade.";
 echo "<br>";
 echo "Minha altura e peso sao $altura e $peso respectivamente <p>";


 // Informações sobre Variáveis
 echo 'Informações sobre Variavel';
 echo"<br>";
 var_dump ($nome);
 echo "<br>";
 var_dump ($idade);
 echo "<br>";
 var_dump($peso);

 ?>