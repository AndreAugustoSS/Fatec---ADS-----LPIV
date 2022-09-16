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

 // "Array" (vetor) Misto Combinação de "arrays" numéricos e associativos
 # Podemos criar um array que combine indices numéricos ou nominais (String)
 # Não são utilizados com frequência, pois são mais dificeis de gerenciar 

 $dados = [
    0 => 10,
    'nome' => 'Paulo',
    'sobrenome' => 'Araujo',
    10 => 1000,
    11 => 'Endereço'
 ];

 # Dificulta a forma de acessar os dados
 echo $dados[0]; # 10
 echo "<br>";

 echo $dados['nome'];   # Vai adicionar o 'Paulo'
 echo "<br>";
?>