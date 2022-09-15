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

 // Tipo de Dados
 // =============

 # As variaveis podem ser de diferentes de dados
 # A mesma variável pode conter tipos de dados
 
 # Atribuiçãoes de tipos diferentes para a mesma variável
 $variavel = 100;
 $variavel = "cem";

 # Apesar das variáveis serem de tipo implicito 
 # é importante conhecer alguns tipos de variáveis
 
 $inteiro = 100;      # São valores seguidos SEM casas decimais
 $float = 10.5;       # São valores seguidos de casas decimais
 $bool = true;        # escreve true ou false / Assume valores falsos ou verdadeiros
 $string = "Bom dia"; # Uma varável do tipo string é uma varável texto com uma cadeia de caracteres
 $array = [1,2,3];    # Coleção de valores
 $nulo = null;        # Variável com valor nulo - Ele reserva um espaço de memória da RAM, porém se tiver algum lixo o Nulo limpa, ele declara uma variável sem definir um valor a ela.
 # $pessoa = nem Pessoa(); # é um objeto com propriedades e métodos

 ?>