<!doctype html>
<html lang="pt-BR">
  <head>
    <title>Aula02</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  </head>
  <body class="bg-dark text-light text-center aumenta">

  <?php 
  
  // Variáveis
  // ===============================
  # Utilizadas para armanezar dados como números, textos, etc..
  # Podemos apresentar e modificar os valores contidos em seu interior ao longo do código

  # As variaveis são definidas com o caractere $ e nome da variável como identificador
  
  $n1;
  # Foi criado um espaço de memória sem conteúdo.
  # Variavel não foi iniciada.

  $n2 = "Teste";
  # Conteúdo da variável alterado com valor (Teste) e tipo de dado (String).
  # Observamos que a variavel não é tipificada

  echo $n2;
  # Apresentar o conteúdo da variável

  # As variaveis são "Case Sensitive"
  # Portanto uma variável denonimada $n2 e outra denonimada de $N2 são diferentes 

  $n2 = "150"; // Uma variável 
  $N2 = "100"; // Outra variável

  # Formas não recomendadas de nomear variaveis
  # Exemplos de variaveis mal definidas
 /*
 $1var = 0;
 $!var = 0;
 $var(1) = 0;
 $var 1 = 0;
 $var-um = 0;
 */

 # Formas recomendadas de nomear variaveis
/*
$var1 = 0;
$var_um = 0;
$varUm = 0;
$_var_um = 0;
$_1 = 0;
*/ 

 # Não há uma definição de formas mais correta de se nomear uma variável.
 # Porém, é recomendado um mesmo padrão em um mesmo projeto.
 # Pode-se verificar se o cliente já possui um padrão definido ou se ele já possui um determinado padrão
 
 # Exemplos:
 #1 - Camel Case - Padrao muito utilizado
 $umaVariavel = 0;
 
 #2 - Snake Case - Com underscores
 $uma_variavel = 0;

 #3 - Studly Case - não muito recomendado, pois pode entrar em conflito com nomes de classes
 $UmaVariavel = 0;

  ?>

  Linha 1<br>  Linha 2<br>   Linha 1<br>  Linha 2<br>   Linha 1<br>  Linha 2<br>   Linha 1<br>  Linha 2<br>   Linha 1<br>  Linha 2<br>   Linha 1<br>  Linha 2<br>   Linha 1<br>  Linha 2<br>   Linha 1<br>  Linha 2<br>   Linha 1<br>  Linha 2<br>   Linha 1<br>  Linha 2<br> 

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
  </body>
</html>

<style>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       
</style>