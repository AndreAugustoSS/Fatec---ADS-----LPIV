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

 // Declarações e instruções condicionais
 #  Switch - É uma alternativa ao encadeamento do IF...ELSEIF...ELSEIF...ELSE

 $nome = 'Paulo';
 # Neste caso não temos a construção de uma condição lógioca.
 # Mas, podemos construir a condição lógica e  armazená-la em 
 # uma variável de teste.
 switch ($nome){
    case 'Jonatas':
        // Executa este bloco de código 1 
        echo 'Instruções de código 1 <br>';
        echo 'Instruções de código 2 <br>';
        break;

    case 'Paulo':
        // Executa este bloco de código 2
        echo 'Instruções de código 3 <br>';
        echo 'Instruções de código 4 <br>';
        break; 
    default: 
       // Executa este bloco de código 3 
       echo 'Instruções de código 5 <br>';
       echo 'Instruções de código 6 <br>';
       break;

 }

?>